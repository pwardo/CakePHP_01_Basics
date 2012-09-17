<h2>Add a User</h2>

<?php

echo $this->form->create();
echo $this->form->input('firstname');
echo $this->form->input('lastname');
echo $this->form->input('email');
echo $this->form->input('password');
echo $this->form->end('Save');
?>