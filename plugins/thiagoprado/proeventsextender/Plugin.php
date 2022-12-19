<?php namespace ThiagoPrado\ProEventsExtender;

use System\Classes\PluginBase;
use Radiantweb\Proevents\Controllers\Events as EventsController;
use Radiantweb\Proevents\Controllers\GeneratedDates as GeneratedDatesController;
use Radiantweb\Proevents\Models\Event as EventsModel;
use Radiantweb\Proevents\Models\GeneratedDate as GeneratedDatesModel;
use ThiagoPrado\ProEventsExtender\Models\EventExtender as ExtenderModel;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
    
    public function boot() 
    {
        EventsModel::extend(function($model){
            $model->hasOne['extender'] = ['ThiagoPrado\ProEventsExtender\Models\EventExtender', 'key' => 'event_id'];
        });

        GeneratedDatesModel::extend(function($model){
            $model->hasOne['extender'] = ['ThiagoPrado\ProEventsExtender\Models\EventExtender', 'key' => 'event_id', 'otherKey' => 'event_id'];
        });

        EventsController::extendFormFields(function($form, $model, $context){
            if (!$model instanceof EventsModel)
                return;

            if (!$model->exists)
                return;

            // Ensure that a extender model always exists    
            ExtenderModel::getFromEvent($model);
            
            $form->addTabFields([
                'extender[color]' => [
                    'label' => 'Event Color',
                    'tab'   => 'radiantweb.proevents::lang.backend.events.fields.tabs.content',
                    'type'  => 'colorpicker'
                ]
            ]);
        });
    }
}
