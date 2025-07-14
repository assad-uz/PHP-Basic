<?php 
// All New
session_start();
unset($_SESSION['start']);
session_destroy();
header("Location: login.php");
exit;
?>

<?php 
/*
session_unset() use করলে পুরো session array খালি হয়
session_destroy() দিয়ে session file/memory পুরোপুরি বন্ধ হয়
exit; না দিলে header redirect এর পরেও script চলতে পারে। 
কারণ: PHP script header() এর পরে চলতেই থাকে যদি তুমি exit; না দাও, যা security/performance issue হতে পারে।
*/
?>