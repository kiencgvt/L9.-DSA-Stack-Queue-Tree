<?php


class Queue
{
    private array $queue;
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
            $index = 0;
            $minCode = $this->queue[$index]->code;
            for ($i = 1; $i < count($this->queue); $i++) {
                if ($this->queue[$i]->code < $minCode) {
                    $minCode = $this->queue[$i]->code;
                    $index = $i;
                }
            }
            $item = $this->queue[$index];
            array_splice($this->queue, $index, 1);
            return $item;
        } else {
            echo "Còn gì nữa đâu mà khóc với sầu! ";
        }
    }

    public function isEmpty()
    {
        return count($this->queue) == 0;
    }

    public function __toString(): string
    {
        print_r($this->queue);
    }
}