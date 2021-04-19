<?php
class QueueComplete
{
    private $queue = [];

    public function add($value): void
    {
        array_unshift($this->queue, $value);
    }

    public function remove()
    {
        return array_pop($this->queue);
    }

    public function peek()
    {
        return count($this->queue)
            ? $this->queue[array_key_last($this->queue)]
            : null;
    }
}