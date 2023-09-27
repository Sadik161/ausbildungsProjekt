<?php

echo $this->Form->create($image, ['type' => 'file']);
echo $this->Form->control('image_file', ['type' => 'file']);
echo $this->Form->button(__('Hochladen'));
echo $this->Form->end();