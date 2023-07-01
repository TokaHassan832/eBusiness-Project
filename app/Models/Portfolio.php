<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    public function scopeFilter($query , array $filters){

        $query->when($filters['category'] ?? false , fn($query,$category) =>
        $query
            ->whereExists(fn($query)=>
            $query->from('portfolio_categories')
                ->whereColumn('portfolio_categories.id','portfolios.portfolioCategory_id')
                ->where('portfolio_categories.slug',$category))
        );



    }

    public function category(){
        return $this->belongsTo(PortfolioCategory::class,'portfolioCategory_id');
    }
}
