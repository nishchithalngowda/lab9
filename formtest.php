<!DOCTYPE html>
<head>
 <meta charset=UTF-8" />
 
 <title>PHP QUIZ</title>
 
 <link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
<div class="card">
 
 <h1>Simple online test web page in PHP</h1>
 
 <form action="result.php" method="post" id="quiz">
 <div class="row">
            <ol>
                <li>
                <div class="col">
                <div class="form-group">
                
                    <h3> What is the use of sprintf() function in PHP?'?</h3>
                    
                    <div>
                        <input type="text" name="question-1-answers" id="question-1-answers" placeholder="Type Answer Here..." />
                    </div>
                    </div>
                    </div>
                
                </li>
                
                <li>
                <div class="col">
                <div class="form-group">
                
                    <h3>Who is known as the father of PHP?</h3>
                    
                    <div>
                        <input name="question-2-answers[]" id="question-2-answers" placeholder="Type Answer Here..." type="text"/>
                    </div>
                    </div>
                    </div>
                
                </li>
                
                <li>
                <div class="col">
                <div class="form-group">
                
                    <h3>write a program to create a simple online test form using php </h3>
                    
                    <div>
                        <p>Upload Here :</p>
                        <input type="file" name="question-f-answers" id="question-f-answers">
                    </div>
                    </div>
                    </div>
            
                </li>
                
                <li>
                <div class="col">
                <div class="form-group">
                
                    <h3>Which of the following PHP function is used to generate unique id?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) id()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) mdid()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) uniqueid()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) None of the above</label>
                    </div>
                    </div>
                    </div>
                
                </li>
                
                <li>
                <div class="col">
                <div class="form-group">
                
                    <h3>Singly quoted strings are treated almost literally, whereas doubly quoted strings replace variables with their values as well as specially interpreting certain character sequences.</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) true</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) false</label>
                    </div>
                    </div>
                    </div>
                
                </li>

                <li>
                <div class="col">
                <div class="form-group">
                
                    <h3>Which of the following is used to get cookies?</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) getcookie() function</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) $_COOKIE variable</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="C" />
                        <label for="question-5-answers-C">C) isset() function</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="D" />
                        <label for="question-5-answers-D">D) None of the above.</label>
                    </div>
                    </div>
                    </div>
                
                </li>

                <li>
                <div class="col">
                <div class="form-group">
                
                <h3>Which gives a string containing PHP script file name in which it is called?</h3>
                
                <div>
                    <input type="text" name="question-6-answers" id="question-6-answers" placeholder="Type Answer Here..." />
                </div>
                </div>
                </div>
            
            </li>

            <li>
                <div class="col">
                <div class="form-group">
                
                    <h3>Which of the following is used to destroy the session?</h3>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                        <label for="question-7-answers-A">A) session_start() function</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B">B) $_SESSION[]</label>
                    </div>

                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="C" />
                        <label for="question-7-answers-C">C) isset() function</label>
                    </div>

                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="D" />
                        <label for="question-7-answers-D">D) session_destroy() function</label>
                    </div>
                </div>
                </div>
                
                </li>

                <li>
                <div class="col">
                <div class="form-group">
                
                <h3>PHP variables are case-sensitive?</h3>
                
                <div>
                    <input type="text" name="question-8-answers" id="question-8-answers" placeholder="Type Answer Here..." />
                </div>
                </div>
                </div>
            
                </li>

                <li>
                <div class="col">
                <div class="form-group">
                
                <h3>What data type will PHP automatically convert the following variable to:? $aVariable = 99;</h3>
                
                <div>
                    <input type="text" name="question-9-answers" id="question-9-answers" placeholder="Type Answer Here..." />
                </div>

                </div>
                </div>
            
                </li>
            
            </ol>
            <div class="col">
            <input type="submit" value="Submit" class="submitbtn" />
            </div>
        </div>
 </form>
 
 
 </div>
 
 
</body>
 
</html>