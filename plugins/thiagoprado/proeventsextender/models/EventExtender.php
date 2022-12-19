<?php namespace ThiagoPrado\ProEventsExtender\Models;

use Model;

/**
 * Model
 */
class EventExtender extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'thiagoprado_proeventsextender_event_color';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $belongsTo = [
        'event' => ['Radiantweb\Proevents\Models\Event', 'key' => 'event_id'],
        'generatedDate' => ['Radiantweb\Proevents\Models\Event', 'key' => 'event_id', 'otherKey' => 'event_id'],
    ];
    
    public static function getFromEvent($event) 
    {
        if ($event->extender)
            return $event->extender;
        
        $extender = New static;
        $extender->event = $event;
        $extender->save();
        return $extender;
    }

}
