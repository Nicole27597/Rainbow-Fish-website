-- Quiz database
--Akshay. "How to Create Simple Quiz using PHP and MySQL". technopoints.co.in. 
--https://technopoints.co.in/create-simple-quiz-using-php-mysql/ (accessed Oct. 3 & 4, 2020).
CREATE TABLE "quiz" (
    "id" int(20) NOT NULL,
    "question" text NOT NULL,
    "option A"varchar(100) NOT NULL,
    "option B" varchar(100) NOT NULL,
    "option C" varchar(100) NOT NULL,
    "option D" varchar(100) NOT NULL,
    "answer" varchar(100) NOT NULL,
    "user_answer" text
);

INSERT INTO "quiz" ('id', 'question', 'option A', 'option B', 'option C', 'option D', 'answer') VALUES
(1, 'How many fish are there at the end of the book?', '7', '5', '9', '12', '9'),
(2, 'Who was the first fish to get a shiny scale?', 'The little blue fish', 'The purple fish', 'The big fish', 'The green fish', 'The little blue fish'),
(3, 'Who told Rainbow Fish to give away his scales?', 'A shark', 'The octopus', 'The startfish', 'A whale', 'The octopus'),
(4, 'What colour was the starfish', 'blue', 'green', 'red', 'pink', 'pink');
