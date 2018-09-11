<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'address', 'website', 'email'];

    /**
     * Users assigned to the company.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->hasMany(User::class, 'company_id');
    }
}