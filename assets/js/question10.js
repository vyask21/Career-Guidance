const quiz = [
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
    q:'A disease always has',
    options:['cure','germs','cause','patient'],
    answer:2
    },
    {
    q:' A lotus flower always has',
    options:['mud','petal','root','water'],
    answer:1
    },
    {
    q:'Choose the odd one.',
    options:['beside','near','under','where'],
    answer:3
    },
    {
    q:'Choose the odd one.',
    options:['calendar','month','day','year'],
    answer:0
    },
    {
    q:'He found the gold coin <u>as he cleans</u> the floor',
    options:['as he had cleaned','while he cleans','while he is cleaning','while cleaning','No correction required'],
    answer:3
    },
    {
    q:'Antonym of CONCEDE',
    options:['object','refuse','grant','accede','No correction required'],
    answer:1
    },
    {
    q:'Antonym of CONFESS',
    options:['deny','refuse','contest','contend','No correction required'],
    answer:0
    },
    {
    q:'Antonym of FAMOUS',
    options:['disgrace','unknown','evil','popular','No correction required'],
    answer:1
    },
    {
    q:'Synonym of FEEBLE',
    options:['weak','arrogant','shy','vain','No correction required'],
    answer:0
    },
    {
    q:'Synonym of TIMID',
    options:['fast','slow','medium','shy','No correction required'],
    answer:3
    },
    {
    q:'You havent had your lunch yet,____  you?',
    options:['are','are not','have','have not','No correction required'],
    answer:3
    },
    {
    q:' His father-in-law ____ him up in business.',
    options:['put','made','set','built','No correction required'],
    answer:2
    },
    {
    q:'A mirror always ____',
    options:['distorts','retracts','refracts','reflects'],
    answer:3
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
    q:'Introducing a man, a woman said, "He is the only son of the mother of my mother." How is the woman related to the man?',
    options:['mother','sister','neice','aunt'],
    answer:2
    },
    {
    q:'Amit said - "This girl is the wife of the grandson of my mother". How is Amit related to the girl?',
    options:['nephew','cousin','mother-in-law','father-in-law'],
    answer:3
    },
    {
    q:'PASTORAL : RURAL',
    options:['metropolitan: urban','sleepy: nocturnal','harvest: autumn'],
    answer:0
    },
    {
    q:'SCD, TEF, UGH, ____, WKL',
    options:['CMN','UJI','VIJ','IJT'],
    answer:2
    },
    {
    q:'FAG, GAF, HAI, IAH, ____',
    options:['JAK','HAL','HAK','JAI'],
    answer:0
    },
    {
    q:'Tanya is older than Eric.Cliff is older than Tanya.Eric is older than Cliff.If the first two statements are true, the third statement is',
    options:['true','false','uncertain'],
    answer:1
    },
    {
    q:'Look at this series: 7, 10, 8, 11, 9, 12, ... What number should come next?',
    options:['7','10','6','13'],
    answer:1
    },
    {
    q:'In how many ways you can shoot a photograph by seating 5 out of 7 friends on 5 chairs, such that two of them, Rahul and Madan are always photographed?',
    options:['1200','120','60','10','30'],
    answer:0
    },
    {
    q:'2 men or 3 women can do a piece of work in 50 days. In how many days can 1 man and 1 woman do the work?',
    options:['45 days','60 days','75 days','80 days','Cannot be determined'],
    answer:1
    },
    {
    q:'Four of the five are alike in a certain way and so form a group. Which one does not belong to the group',
    options:['64','49','25','40','36'],
    answer:3
    },
    {
    q:'Four of the five are alike in a certain way and so form a group. Which one does not belong to the group',
    options:['73','31','93','61','89'],
    answer:2
    },
    {
    q:'Among A, B, C, D and E each having a different height, B is taller than D. E is shorter than A. C is taller than B but shorter than E. Who among them is the tallest?',
    options:['A','B','C','D'],
    answer:0
    },
    {
    q:'If North is changed to South west and East to North West and so on, then what will come in place of South-west?',
    options:['North-East','East','South-East','West'],
    answer:1
    },
    {
    q:'On a six-sided die, each side has a number between 1 and 6. What is the probability of throwing a 3 or a 4?',
    options:['1 in 6','1 in 3','1 in 2','1 in 4'],
    answer:1
    },
    {
    q:'If the length of a rectangle increases by 30% and the breadth decreases by 20%, find the percantage change in the area',
    options:['4%','5%','10%','9%','13%'],
    answer:0
    },
    {
    q:'A father is now three times as old as his son. Five years back, he was four times as old as his son. The age of the son is :',
    options:['12','15','14','16'],
    answer:1
    },
    {
    q:'If 100 cats kill 100 mice in 100 days, then 4 cats would kill 4 mice in how many days ?',
    options:['990','110','99','100'],
    answer:3
    },
    {
    q:' Reena is twice as old as Sunita. Three years ago, she was three times as old as Sunita. How old is Reena now ?',
    options:['13','12','14','15'],
    answer:1
    },
    {
    q:'What number would come next in the series given 10,20,60,300,2100,__ ?',
    options:['23100','21500','20000','18500','23000'],
    answer:0
    },
    {
    q:'K is 40 m South-West of L. If M is 40 m South-East of L, then M is in which direction of K?',
    options:['east','north-east','west','south'],
    answer:0
    },
    {
    q:'A two-digit number is chosen at random. What is the probability that the chosen number is a multiple of 7?',
    options:['1/10','1/9','11/90','13/90'],
    answer:3
    },
    {
    q:'Sahil took a loan for 6 years at the rate of 5% per annum on Simple Interest, If the total interest paid was Rs. 1230, the principal was',
    options:['4200','4300','4400','4100'],
    answer:3
    },
    {
    q:'At what rate percent per annum will the simple interest on a sum of money be 2/5 of the amount in 10 years',
    options:['1%','2%','3%','4%'],
    answer:3
    },
    {
    q:'If log27 = 1.431, then the value of log 9 is:',
    options:['0.934','0.945','0.954','0.958'],
    answer:2
    },
    {
    q:'The logarithms having base ‘10’ are called',
    options:['pure logarithms','common logarithms','natural logarithms','infinite logarithms'],
    answer:1
    },
    {
    q:'The logarithm of unity to any number to itself as base should be',
    options:['10','-1','1','0'],
    answer:2
    },
    {
    q:'If x and y are complementary angles, then',
    options:['sin x = sin y','tan x = tan y','cosx = cos y','sec x = cosec y'],
    answer:3
    },
    {
    q:' sin 2B = 2 sin B is true when B is equal to',
    options:['90','60','30','0'],
    answer:3
    },
    {
    q:'There are 6 blue marbles, 3 red marbles, and 5 yellow marbles in a bag. What is the probability of selecting a blue or red marble on the first draw?',
    options:['1/3','4/7','8/14','9/14'],
    answer:3
    },
    {
    q:'If South-East becomes North, North-East becomes West and so on. What will West become?',
    options:['east','north','south-east','south-west'],
    answer:2
    },
    {
    q:'In a class of 22 students, Deepak stands 12th from the end. What is his rank from the beginning ?',
    options:['4','11','20','18','13'],
    answer:1
    },
    {
    q:'Book is to Reading as Fork is to:',
    options:['drawing','writing','dancing','eating'],
    answer:3
    },
    {
    q:'8:4 as 10:',
    options:['3','7','24','5'],
    answer:3
    },
    {
    q:'In a row of trees, one tree is fifth from either end of the row. How many trees are there in the row?',
    options:['8','9','10','11'],
    answer:1
    },
    {
    q:'Raman ranks sixteenth from the top and forty ninth from the bottom in a class. How many students are there in the class ?',
    options:['50','64','65','66'],
    answer:1
    },
    {
    q:'To hit the nail right on the head',
    options:['To do the right thing','To destroy ones reputation','To announce ones fixed views','To teach someone a lesson'],
    answer:0
    },
    {
    q:'To be the question',
    options:['To refer to','To take for granted','To raise objections','To be discussed'],
    answer:1
    },
    {
    q:'To pick holes',
    options:['To find some reason to quarrel','To destroy something','To cut some part of an item','To critise someone'],
    answer:3
    },
    {
    q:'Which word does NOT belong with the others?',
    options:['tulip','rose','bud','daisy'],
    answer:2
    },
    {
    q:'Which word does NOT belong with the others?',
    options:['tyre','steering wheel','engine','car'],
    answer:3
    },
    {
    q:'His diet was deficient ___ protein and vitamins',
    options:['of','for','by','in'],
    answer:3
    }
    ]