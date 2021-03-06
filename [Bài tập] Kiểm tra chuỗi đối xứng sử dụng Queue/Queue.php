<?php


class Queue
{
    public array $queue;
    private int $limit;

    public function __construct($limit, $queue = [])
    {
        $this->limit = $limit;
        $this->queue = $queue;
    }

    public function enqueue($data)
    {
        if (count($this->queue) < $this->limit) {
            array_push($this->queue, $data);
        } else {
            echo "Queue over flow!";
        }
    }

    public function dequeue()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->queue);
        } else {
            echo "Còn gì nữa đâu mà khóc với sầu! ";
        }
    }

    public function isEmpty()
    {
        return count($this->queue) == 0;
    }

    public function display()
    {
        return $this->queue;
    }
}