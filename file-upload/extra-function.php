elseif (!in_array($file_type, $allowed_types))

!in_array()
 এই শর্ত চেক করে:

$file_type নামের ভ্যারিয়েবলটি $allowed_types অ্যারে-এর মধ্যে আছে কি না।

আর !in_array(...) মানে: "না থাকলে"। অর্থাৎ:

যদি $file_type $allowed_types এর মধ্যে না থাকে, তাহলে এই elseif ব্লক চালাবে।