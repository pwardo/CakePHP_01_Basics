<h3>Add a Product</h3>

<?php

echo $this->form->create();
echo $this->form->input('user_id');
echo $this->form->input('name');
echo $this->form->end('Save');


?>