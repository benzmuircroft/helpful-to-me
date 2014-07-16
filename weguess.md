WeGuess PHP API
===============


get_did_info
------------

**Ask WeGuess who in a family is playing and what categories are available to them.**


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

**Ask WeGuess if the user is a first time player or if they have been playing for a while. If the user is new it will create a new session for the user to hold thier progress in the game. If the user is not new then it will ask if the users last session is over a month old, if true it will renew the users session (resetting their progress to zero). If the user is not new and they have answered all the available questions (questions they have purchased) it will renew the users session. If the user is not new but has not yet completed all the avaliable questions it will return the users current progress.**


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





category_ask_random_question
----------------------------

**Ask WeGuess to return a random question from a category. The question returned has not yet been answered by the user.**

Note: Should we also return the number of questions remaining and/or percent of questions remaining unanswered in the category?


(category = 1, session_id = 1)


```javascript
"http://weguess.mobi/api.php?f=category_ask_random_question&category=1&session_id=1"
```

returns JSON:

> {"question_id":1,"question:"Why?","answer1":"because A!","percent1":"16","answer2":"because B!","percent2":"11","answer3":"because C!","percent3":"32","answer4":"because D!","percent4":"5","answer5":"because E!","percent5":"6","answer6":"because F!","percent6":"30"}






