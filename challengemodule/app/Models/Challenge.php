<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'checked',
        'reward_coins',
        'max_users',
        'current_users',
        'expiration_date',
        'product_name',
        'product_quantity'
    ];
    
    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    public function setDescription(string $description): void
    {
        $this->attributes['description'] = $description;
    }

    public function getChecked(): bool
    {
        return $this->attributes['checked'];
    }

    public function setChecked(bool $checked): void
    {
        $this->attributes['checked'] = $checked;
    }

    public function getRewardCoins(): int
    {
        return $this->attributes['reward_coins'];
    }

    public function setRewardCoins(int $rewardCoins): void
    {
        $this->attributes['reward_coins'] = $rewardCoins;
    }

    public function getMaxUsers(): int
    {
        return $this->attributes['max_users'];
    }

    public function setMaxUsers(int $maxUsers): void
    {
        $this->attributes['max_users'] = $maxUsers;
    }

    public function getCurrentUsers(): int
    {
        return $this->attributes['current_users'];
    }

    public function setCurrentUsers(int $currentUsers): void
    {
        $this->attributes['current_users'] = $currentUsers;
    }

    public function getExpirationDate(): string
    {
        return $this->attributes['expiration_date'];
    }

    public function setExpirationDate(string $expirationDate): void
    {
        $this->attributes['expiration_date'] = $expirationDate;
    }

    public function getProductName(): string
    {
        return $this->attributes['product_name'];
    }

    public function setProductName(string $productName): void
    {
        $this->attributes['product_name'] = $productName;
    }

    public function getProductQuantity(): int
    {
        return $this->attributes['product_quantity'];
    }

    public function setProductQuantity(int $productQuantity): void
    {
        $this->attributes['product_quantity'] = $productQuantity;
    }

}
