const quiz = [
{
q:'Dog : Rabies :: Mosquito : ?',
options:['plague','malaria','death','sting'],
answer:1
},
{
q:'Man : Biography :: Nation : ?',
options:['leader','people','geography','history'],
answer:3
},
{
q:'Synonym of ALERT',
options:['Energetic','Observant','Intelligent','Watchful'],
answer:3
},
{
q:'Synonym of INEXPLICABLE',
options:['Confusing','Unaccountable','Chaotic','Unconnected'],
answer:1
},
{
q:'Antonym of ENORMOUS',
options:['soft','average','tiny','weak'],
answer:2
},
{
q:'Antonym of EXODUS',
options:['influx','home-coming','return','restoration'],
answer:0
},
{
q:'Fate smiles ____ those who untiringly grapple with stark realities of life.',
options:['with','over','on','round'],
answer:2
},
{
q:'The miser gazed  ____ at the pile of gold coins in front of him.',
options:['avidly','admiringly','thoughtfully','earnestl'],
answer:0
},
{
q:'He confidentially asked the crowd if they thought he was right and the crowd shouted <u>that they did.</u>',
options:['that he did','that they had','that he is','that he didnt','No correction required'],
answer:4
},
{
q:'We must <u>take it granted</u> that Madhu will not come for todays function',
options:['take it for granted','taking it granted','took it as granted','have it granted','No correction required'],
answer:0
},
{
q:'Maria unnecessarily <u>picked up</u> a quarrel with Rani and left the party hurried',
options:['has picked up','picked on','picked','picking up','No correction required'],
answer:2
},
{
q:'She cooks, washes dishes, does her homework and <u>then relaxing</u>',
options:['relaxing then','then is relaxing','relaxing is then','then relaxes'],
answer:3
},
{
q:'He found the gold coin <u>as he cleans</u> the floor',
options:['as he had cleaned','while he cleans','while he is cleaning','while cleaning','No correction required'],
answer:3
},
{
q:'Despite his best efforts to conceal his anger ......',
options:['we could detect that he was very happy','he failed to give us an impression of his agony','he could succeed in doing it easily','people came to know that he was annoyed'],
answer:3
},
{
q:'To keeps ones temper',
options:['to become hungry','to be in good mood','to be aloof from','none'],
answer:1
},
{
q:'To have an axe to grind',
options:['a private end to serve','To fail to arouse interest','to have no result','none'],
answer:0
},
{
q:'Change in speech. I told him that he was not working hard.',
options:['I said to him, "You are not working hard."','I told to him, "You are not working hard."','I said, "You are not working hard."','I said to him, "He is not working hard."'],
answer:0
},
{
q:'One Word Substitute for- Extreme old age when a man behaves like a fool',
options:['Imbecility','Senelity','Dotage','Superannuation'],
answer:2
},
{
q:'One Word Substitute for- That which cannot be corrected',
options:['Unintelligible','Indelible','Illegible','Incorrigible'],
answer:3
},
{
q:'Find the correctly spelt words.',
options:['Efficient','Treatmeant','Beterment','Employd'],
answer:0
},
{
q:'If 32 workers dig a trench 25 mtrs long, 4 mtrs wide and 4 mtrs deep in 10 days of 10 hrs shifts each,the in how many days of 6 hrs shifts each, will 48 workers dig another 30 mtrs long, 6 mtrs wide and 5 mtrs deep trench',
options:['20 days','25 days','15 days','12 days','None of these'],
answer:3
},
{
q:'Pushpa is twice as old as Rita was two years ago. If the difference between their ages be 2 years, how old is Pushpa today?',
options:['6 years','8 years','10 years','12 years','None of these'],
answer:1
},
{
q:'A cloth merchant claim to sell his material at cost price but uses a scale which reads 1 m for 95 cm. find his gain percentage.',
options:['5.26%','6.2%','6.5%','7.5%'],
answer:0
},
{
q:'On selling tea at Rs 40 per kilogram a loss of 10% is incurred. Calculate the amount of tea (in kg) sold,if the total loss incurred is Rs 80.',
options:['12kg','15kg','18kg','20kg'],
answer:2
},
{
q:'The average of 50 numbers is 38. If two numbers, namely 45 and 55 are discarded, the average of remaining numbers is',
options:['36.5','37','37.5','37.52'],
answer:2
},
{
q:'The average of 11 observations is 60. If the average of first five observations is 58 and that of the last five is 56, then the sixth observation is',
options:['90','110','85','100'],
answer:0
},
{
q:'A person covers a distance in 24 min, if he runs at a speed of 27 km/h on an average. Find the speed at which he must run to reduce the time of journey to 18 min.',
options:['27 km/h','36 km/h','45 km/h','49 km/h'],
answer:1
},
{
q:'A car travels a distance of 350 km at uniform speed. If the speed of the car is 20 km/h more, it takes 2 h less to cover the same distance. Find the original speed of the car.',
options:['25 km/h','50 km/h','75 km/h','35 km/h'],
answer:1
},
{
q:'50% of a% of b is 75% of b% of c. Which of the following is c?',
options:['1.5a','0.667a','0.5a','1.25a'],
answer:1
},
{
q:' If 10% of an electricity bill is deducted, Rs 45 is still to be paid. How much was the bill ?',
options:['Rs 50','Rs 40','Rs 35','Rs 54'],
answer:0
},
{
q:'Which of the following numbers should be added to 11158 to make it exactly divisible by 77 ?',
options:['9','8','7','5'],
answer:2
},
{
q:'When n is divided by 4, the remainder is 3. What is the remainder when 2n is divided by 4 ?',
options:['1','2','3','6'],
answer:1
},
{
q:'Sachin is younger than Rahul by 7 years. If their ages are in the respective ratio of 7 : 9, how old is Sachin?',
options:['12','16','20','24.5'],
answer:3
},
{
q:'Mothers age today is thrice as her daughters. After 10 years it would be just double. How old is the daughter today ?',
options:['6','8','9','10'],
answer:3
},
{
q:'Ratio of boys to the girls in a class is 5 : 4. Which of the following cannot be the number of students in the class ?',
options:['45','72','108','98'],
answer:3
},
{
q:'What should be subtracted from each of the numbers 54,71,75 and 99, so that the remainders are in continued proportion?',
options:['9','7','4','3'],
answer:3
},
{
q:'In a lottery, there are 10 prizes and 25 blanks. A lottery is drawn at random. What is the probability of getting a prize?',
options:['1/10','2/5','2/7','5/7'],
answer:0
},
{
q:'From a pack of 52 cards, two cards are drawn together at random. What is the probability of both the cards being kings?',
options:['1/15','35/256','25/57','1/221'],
answer:3
},
{
q:'Rs. 120 are divided among A, B,C such that As share is Rs. 20 more than Bs and Rs.20 less than Cs. What is B’s share',
options:['Rs 10','Rs 20','Rs 24','Rs 28'],
answer:1
},
{
q:'Find the largest number which divides 62,132 and 237 to leave the same remainder in each case.',
options:['21','30','35','40'],
answer:2
},
{
q:'An article when sold at a gain of 5% yields Rs 15 more than when sold at a loss of 5%. What is the cost price ?',
options:['Rs 64','Rs 80','Rs 150','Rs 200'],
answer:2
},
{
q:'If the length of a rectangle increases by 30% and the breadth decreases by 20%, find the percantage change in the area',
options:['4%','5%','10%','9%','13%'],
answer:0
},
{
q:'Four of the five are alike in a certain way and so form a group. Which one does not belong to the group',
options:['64','49','25','40','36'],
answer:3
},
{
q:'What number would come next in the series given 10,20,60,300,2100,__ ?',
options:['23100','21500','20000','18500','23000'],
answer:0
},
{
q:'In a class of 22 students, Deepak stands 12th from the end. What is his rank from the beginning ?',
options:['4','11','20','18','13'],
answer:1
},
{
q:'SOUND : CACOPHONY',
options:['speech: oration','touch: massage','smell: stench','taste: style'],
answer:2
},
{
q:'Some boys are sitting in a row. P is sitting fourteenth from the left and Q is seventh from the right. If there are four boys between P and Q, how many boys are there in the row ?',
options:['25','23','21','19'],
answer:0
},
{
q:'Look at this series: 36, 34, 30, 28, 24, ... What number should come next?',
options:['20','22','23','26'],
answer:1
},
{
q:'Look at this series: 53, 53, 40, 40, 27, 27, ... What number should come next?',
options:['12','14','27','54'],
answer:1
},
{
q:'During the past year, Josh saw more movies than Stephen.Stephen saw fewer movies than Darren.Darren saw more movies than Josh.If the first two statements are true, the third statement is',
options:['true','false','uncertain'],
answer:2
},
{
q:'SCD, TEF, UGH, ____, WKL',
options:['CMN','UJI','VIJ','IJT'],
answer:2
},
{
q:'196 : 256 :: 324 : __',
options:['361','400','411','484'],
answer:1
},
{
q:' If in a certain language, MADRAS is coded as NBESBT, how is BOMBAY coded in that code?',
options:['CPNCBX','CPNCBZ','CQOCBZ','CPOCBZ'],
answer:1
},
{
q:' In a certain code, MONKEY is written as XDJMNL. Hoe is TIGER written in that code?',
options:['QDFHS','SDFHS','SHFDQ','UJHFS'],
answer:0
},
{
q:' A is 40 m south-west of B. C is 40 m south-east of B. Then C is in which direction of A?',
options:['East','West','Nort-East','South'],
answer:0
},
{
q:' A watch reads 4.30. If the minute hand points East, in what direction will the hour hand point?',
options:['North','North-West','South','North-East'],
answer:3
},
{
q:'1.Birth 2.Death 3.Funeral 4.Marriage 5.Education',
options:['4,5,3,1,2','2,3,4,5,1','1,5,4,2,3','1,3,4,5,2'],
answer:2
},
{
q:'1. Site 2. Plan 3. Rent 4. Money 5. Building',
options:['4,1,2,5,3',' 3,4,2,5,1','2,3,5,1,4','1,2,3,5,4'],
answer:0
},
{
q:'In the following question, select the odd word pair from the given alternatives.',
options:['pen','paper','marker','highlighter'],
answer:1
},
{
q:'E is the son of C. D is the husband of C. B and G is the only brother and daughter of D respectively. F is the maternal aunt of E and G.How is B related to E?',
options:['Uncle','Nephew','Neice','Aunt'],
answer:0
}
]