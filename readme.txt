*********************
      README
*********************

1. I have modified the following files to customize my experimental environment :-
	a. testenv.html
	b. page1.php
	c. page2.pgp
	d. page3.php
	e. page4.php
	f. page5.php
	g. index.php
	h. tasks.json
	i. index.min.js

2. The files index.php, page1.php - page5.php have all been modified to change the interface of the environment. I have used HTML and CSS to modify the design of the website and I have also embedded a youtube video for the convenience of the user. I have also added the participant's instructions to the index.php page.

3. In page1.php, I have modified the forms to suit my needs and I have also asked the participant to choose whether he/she wants to participate in the experiment through a multiple-choice input. If the user chooses 'Disagree' option, he/she cannot proceed to the next page and will automatically be taken back to the home page.

4. The user does not have to choose whether to perform the AutoComPaste method or Traditional Copy-Paste method first. Based on the participant ID (which is an integer between 1-12 since there are only going to be 12 participants in my experiment), the appication will automatically guide the user to the appropriate test. To be more specific, for users with participant ID less than or equal to 6, they will be made to perform AutoComPaste first followed by Traditional Copy-Paste and for participants with IDs between 7 - 12, it will be the other way around. In order to implement this logic, I have modified page1.php to automatically redirect to page3.php instead of page2.php. I have also manually assigned the value of the "interface" variable in page1 itself and this value is used now in page3.php.

5. Since there are 12 participants, the tasks.json file is arranged in the following format:-
	a. There are 6 objects for ACP test and 6 for Traditional Copy-Paste (xwindow). They are named p1_acp, p2_acp .... p6_acp and for the other one it is p1_xwindow, p2_xwindow... p6_xwindow. Since there are 12 participants and only 6 data objects, what we are doing is to use If-else conditions to map the 12 participants to the 6 data objects. This has been done in index.min.js which uses the participant ID obtained from testenv.html through a hidden input oject in HTML. 
	b. According to my design, the difference between participant 7 and participant 1 for example is, Participant 7 performs the same set of tasks as Participant 1, but participant 1 performs AutoComPaste first followed by Traditional Copy-Paste while participant 7 does the reverse. The same is true for particiant 2-participant 8, participant 3-participant9 and so on. This condition has been implemented in the If-else conditions in the javascript file.

6. Finally, the console debugger is used mainly for data collection. As soon as the user finished a set of tasks for either of the copy-paste techniques, I have to manually copy the data from the console and store it before continuing to the next step. Also, the text result file which is generated at the end is only used for obtaining the demographic details which are provided by the user in page1.php and not for the experiment results. 

7. I have also modified the content displayed in the text windows while performing the experiment to suit my needs. I have also added some HTML formatting to make the instructions and stimulii while performing the experiment appear more readable.
