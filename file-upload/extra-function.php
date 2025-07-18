elseif (!in_array($file_type, $allowed_types))

!in_array()
 এই শর্ত চেক করে:

$file_type নামের ভ্যারিয়েবলটি $allowed_types অ্যারে-এর মধ্যে আছে কি না।

আর !in_array(...) মানে: "না থাকলে"। অর্থাৎ:

যদি $file_type $allowed_types এর মধ্যে না থাকে, তাহলে এই elseif ব্লক চালাবে।

----------------------------------
image/jpeg হলো স্ট্যান্ডার্ড MIME টাইপ (Media Type), যেটা ব্রাউজার এবং সার্ভার উভয়ই চিনে।

image-jpeg বা img/jpeg বা অন্য কোনো রকম spelling MIME টাইপ হিসেবে স্বীকৃত না — তাই PHP বা ব্রাউজার বুঝবে না।

----------------------------------
 লক্ষ্য করুন: enctype="multipart/form-data" অবশ্যই দিতে হবে, নইলে ফাইল কাজ করবে না।