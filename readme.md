# Task
## Mental Math app

TASK:
You will have 5 days.
You are to design a mental maths web application.
within this app i want the following functionality:
1. a 30 second timer
2. a leaderboard
3. percentage ranking
4. No latency between questions
5. no limit to questions
6. all questions must be questions possible in head 
7. this needs to hosted online so anyone can access it
 

# Todo
1. set up subdomain hosting with database: DONE ![image](https://user-images.githubusercontent.com/57009663/119125254-79833700-ba29-11eb-9471-fe13223ef451.png)

2. Create basic Mental maths game DONE ![image](https://user-images.githubusercontent.com/57009663/119125159-607a8600-ba29-11eb-98fa-b0202bbc183b.png)

3. set up database- username, score DONE 

![image](https://user-images.githubusercontent.com/57009663/119125096-50fb3d00-ba29-11eb-980a-eb077b5a7161.png)

4. Get website on subdomain. DONE ![image](https://user-images.githubusercontent.com/57009663/119124962-25785280-ba29-11eb-8b7d-cb655aaf3e1c.png)


5. get name from user and insert into db DONE 

6. user plays game and score is written to databse DONE

![image](https://user-images.githubusercontent.com/57009663/119125511-c2d38680-ba29-11eb-91f5-2134ad0423a9.png)


7. leaderboard shows users postion in  DONE ![image](https://user-images.githubusercontent.com/57009663/119125599-e3034580-ba29-11eb-803b-f90f2b39467f.png)


8. Get users percentage ranking DONE

![image](https://user-images.githubusercontent.com/57009663/119125848-2e1d5880-ba2a-11eb-952a-6d5e6030b2e8.png)


9. Bug test program DONE



check through js script, add comments to assist in explaination/ review by other people.



day 1 + 2, unable to use database, web hosting FTP is still down cant upload to start working with sql
Solution: Changed providers to a new one.





```loop of: (while timer is > = 0 but < 30 secs)	
Take operator from random
	add 1 to total_questions
	take two numbers from random
	calculate value of answer
	output number + operator + number
	take answer in from user
	compare answer to correct answer
		
		if(answer is same as correct):
			add 1 point to score

		else:
		nothing
		continue
			

Display score out of total_questions
```














