<?php namespace Cmsonline\Invoice\Models;

use Model;

/**
 * account Model
 */
class Account extends Model
{

    public $connection  = 'pie';
    public $table       = 'merchants_settings';
    protected $guarded  = ['*'];
    protected $fillable = [];

    
    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'invoices' => [
            'Cmsonline\Invoice\Models\Invoice', 
            'key'       => 'mid', 
            'otherKey'  => 'mid'
        ]
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}