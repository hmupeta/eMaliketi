<?php

namespace App\Services;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class RecommendationService
{
    public function getRecommendations(Product $product, User $user = null)
    {
        return Cache::remember("recommendations-{$product->id}-".($user ? $user->id : 'guest'), 3600, function() use ($product, $user) {
            $recommendations = $this->getContentBasedRecommendations($product);
            
            if ($user) {
                $personalized = $this->getPersonalizedRecommendations($user, $product);
                if ($personalized->isNotEmpty()) {
                    $recommendations = $personalized;
                }
            }
            
            return $recommendations->take(8);
        });
    }

    protected function getContentBasedRecommendations(Product $product)
    {
        return Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->with(['reviews', 'vendor'])
            ->take(10)
            ->get();
    }

    protected function getPersonalizedRecommendations(User $user, Product $currentProduct)
    {
        // Implement your actual ML logic here
        return Product::whereHas('orders', function($query) use ($user) {
                $query->whereIn('user_id', $this->getSimilarUsers($user));
            })
            ->where('id', '!=', $currentProduct->id)
            ->with(['reviews', 'vendor'])
            ->take(10)
            ->get();
    }

    protected function getSimilarUsers(User $user)
    {
        // Replace with actual similarity algorithm
        return User::where('id', '!=', $user->id)
            ->inRandomOrder()
            ->limit(10)
            ->pluck('id');
    }
}