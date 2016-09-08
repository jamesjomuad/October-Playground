<?php namespace Cmsonline\Invoice\Models;

use Model;

class Invoice extends Model
{
    public $connection  = 'invoice';
    public $table       = 'Invoicing.invoices';
    protected $guarded  = ['*'];
    protected $fillable = [];
    
    
    /**
    * @var array Relations
    */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'account' => [
            'Cmsonline\Invoice\Models\Account', 
            'key'       => 'mid', 
            'otherKey'  => 'mid'
        ]
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

	
	public static function getLatest($lastId){
		return self::where('id','>',$lastId);
	}

    public function getHashesAttribute(){
        return str_limit($this->hash, 10);
    }
    
    public function getCustidAttribute(){
        return str_limit($this->customer_id, 10);
    }
    
    public function getSubdomainAttribute(){
        return isset($this->account->subdomain) ? $this->account->subdomain : null;
    }
    
    public function getCreatedAttribute(){
        return \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
    }
    
    public function getActionAttribute(){
        return [
            'id'        => $this->id,
            'subdomain' => $this->getSubdomainAttribute(),
            'hash'      => $this->hash
        ];
    }


}