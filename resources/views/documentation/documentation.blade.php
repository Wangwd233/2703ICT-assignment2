@extends('layouts.master')

@section('title')
   Documentation
@endsection

@section('content')
     <div class="row align-items-start">
       <div class="col">
       <h1>Student name: Wenda Wang </h1>
       <h1> Snumber: s5113465 </h1>
      
       <h1>ERD diagram for database design</h1>
       <img src="https://s5113465.elf.ict.griffith.edu.au/WebAppDev/assignment2/storage/app/public/items_images/Q8(QN[52NL@JJ385A8UVJ]X.png" alt="ERD-diagram" style="width: 750px;px;height:400px;">
       </div>
       <div class="col">
        <div>
         <h4>
         <ul>
           <li>For the Assignment 2, I have complete requirement 1~17, but the 18 recommendation part I have no idea how to achieve it</li>
           <li>I've start the assignment2 by database design for basic table items, users and reviews, and I decide to do the basic CRUD function for items and reviews first, 
                then working on with the bootstrap to make my page looks better, and then implements requirement 15, 16 and 17 as add some tables and change some code in my controller.
           </li>
           <li>I test my code step by step, like when I finish some code in a page and it is time to send it to backend, I will test if it really can be received.
               And always test a implement function if it can run in different situations such as if it can be use by differ users or if some special parameter will generate some issues.  
            </li>
         </ul>
         </h4>
        </div>
       </div>
       <div class="col">
         <h3>
          <ul>
             <li>
                When dealing with the requirement 17 follows and unfollows, I realized that it would have some changes to make it works better.
                So I add some lines of code to improve it, the user now can not follow himself, and they cannot follow the same person they have already followed.
             </li>
             <li>
                I think my backend part should works well, maybe some of the redirect are not satisfied, but my frontend looking is not very pleasant as a page , I only have standard bootstrap to make it readable, 
                so if I have time to improve it, I will focus on how to make my page looks better, and learn more about how to redirect.
             </li>
          </ul>
         </h3>
       </div>
     </div>
@endsection