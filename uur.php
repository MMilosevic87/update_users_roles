<?php

function update_user_roles(){

$emails = array(
    "test1@gmail.com",
    "test2@gmail.com",
    "test3@gmail.com"
);	
	
	
	
// Define the new role you want to assign
$new_role = 'custom_role'; 


// Loop through each email address
foreach ($emails as $email) {
    // Get user by email
    $user = get_user_by('email', $email);
    
    if ($user) {
        // Update user role
        $user->add_role($new_role);
        echo "Updated user role for email: $email to $new_role<br>";
    } else {
        echo "User not found for email: $email<br>";
    }
}
}
