<<<<<<< HEAD
<?php

namespace App\services;
use App\CalendarEventType;

class CalendarEventTypeService
{
        protected $eventType;

        public function __construct(CalendarEventType $eventType){
                $this->eventType = $eventType;
        }

	public function getEventTypes(){
		return CalendarEventType::all();
	}

        public function getEventType($slug){
                return CalendarEventType::where('slug',$slug)->first();
        }
	
	public function store(Array $formData){
                $this->eventType->name 	= $formData['name'];
                $this->eventType->slug  = $formData['name'];
                //$this->eventType->color = $formData['color'];
                $this->eventType->save();
	}

=======
<?php

namespace App\services;
use App\CalendarEventType;

class CalendarEventTypeService
{
        protected $eventType;

        public function __construct(CalendarEventType $eventType){
                $this->eventType = $eventType;
        }

	public function getEventTypes(){
		return CalendarEventType::all();
	}

        public function getEventType($slug){
                return CalendarEventType::where('slug',$slug)->first();
        }
	
	public function store(Array $formData){
                $this->eventType->name 	= $formData['name'];
                $this->eventType->slug  = $formData['name'];
                //$this->eventType->color = $formData['color'];
                $this->eventType->save();
	}

>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
}