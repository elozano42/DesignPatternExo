<?php 

class StationList implements Countable, Iterator
{
    protected $stations = []; 
    protected $counter = 0; 

    public function __construct() {}    

    public function addStation(RadioStation $station)
    {
        $this->stations[] = $station;
    }

    public function removeStation(RadioStation $stationToRemove)
    {
        $frequencyToRemove = $stationToRemove->getFrequency();

        $this->stations = array_filter($this->stations, function(RadioStation $stationToCompare)
        use ($frequencyToRemove) {
            return $stationToCompare->getFrequency() !== $frequencyToRemove; 
        });
    }

    public function count(): int 
    {
        return count($this->stations);
    }

    public function current(): RadioStation 
    {
        return $this->stations[$this->counter];
    }

    public function key() 
    {
        return $this->counter;
    }

    public function next()
    {
        $this->counter++;
    }

    public function rewind()
    {
        $this->counter = 0;
    }

  public function valid(): bool
  {
      return isset($this->stations[$this->counter]);
  }
}