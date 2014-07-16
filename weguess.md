WeGuess PHP API
===============


get_did_info
------------


accepts parameters:


(did = device_unique_id)


```javascript
"http://weguess.mobi/api.php?f=get_did_info&did=01234_example_device_id_56789"
```

returns JSON:

> {"email":"example@gmail.com","did":"01234_example_device_id_56789","imei":"1_1","categories":[1,3,7]}

Notes: 

 - **imei** has an underscore (_) seperated result. The first number represents the account that holds in-app purchases of question categorys, the second number represents the device id which current user is playing under (an account is allowed up to 3 devices at present).






create_new_session
------------------


accepts parameters:


(imei = number_number, categories = 1_2_3)


```javascript
"http://weguess.mobi/api.php?f=create_new_session&imei=1_1&categories=1_2_3"
```

returns JSON of 4 posible result types:

> {"session":"new","session_id":"1"}

> {"session":"renew","session_id":"1"}

> {"session":"complete","session_id":"1"}

> {"session":"old","session_id":"1","category_percent_completed":{"1":"25","2":"12","3":"0"},"score_in_each_category":{"1":"441","2":"289","3":"0"}}







