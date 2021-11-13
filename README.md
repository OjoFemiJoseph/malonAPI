<strong> Job Listing REST API using Laravel (PHP) </strong>
<ul>
<li> A Business should have the ability to create, update and delete a job. </li>
<li> A Guest Should be able to browse through a List of Jobs</li>
<li> A Guest Should be able to view and apply for a Job</li>
<li>  A Guest can search for a Job</li>
<li> A Business can see a list of jobs they created</li>
<li> A Business can Login</li>
</ul>

<Strong> How to Use </strong>
<ul>
<li>Clone the repository with git clone git@github.com:OjoFemiJoseph/malonAPI.git </li>
<li>Copy the.env.example file to.env and make changes to the database credentials there.</li>
<li>Run composer install </li>
<li>Run php artisan key:generate </li>
<li>Run php artisan migrate --seed </li>
</ul>

<strong> End Points </strong>

<h4>Login : Method POST </h4>

<p>https://malonjobapi.herokuapp.com/api/v1/login </p>

<p>Parameters</p>
<p>email</p>
<p>password</p>

<h4>View Jobs : Method GET </h4>
<p>https://malonjobapi.herokuapp.com/api/v1/jobs</p>

<h4>View Specific Jobs : Method GET </h4>
<p>api/v1/jobs/{jobId}</p>

<h4>Search Jobs: Method GET </h4>
<p>https://malonjobapi.herokuapp.com/api/v1/jobs/type/{jobTypeId} </p>
<p>https://malonjobapi.herokuapp.com/api/v1/jobs/category/{jobCategoryId} </p>
<p>https://malonjobapi.herokuapp.com/api/v1/jobs/title/{jobTitle}</p>
<p>https://malonjobapi.herokuapp.com/api/v1/jobs/work/{workConditionId}</p>


<h4>Apply for specific Jobs : Method POST </h4>
<p>https://malonjobapi.herokuapp.com/api/v1/jobs/{jobId}/apply</p> 

<p>Parameters </p>
<p>job_id</p>
<p>name </p>
<p>email</p>
<p>cover_letter</p>
<p>cv :file(pdf) </p> 



<h4>BusinessEnd Points </h4>
<em>Authorization to the following end points <em>
<p> Bearer Token : token </p>
   
<h4>View signed in business jobs listings </h4>
<p>https://malonjobapi.herokuapp.com/api/user</p> <em> Method : GET <em>
    
<h4> Create Job/ Store </h4>
<p>https://malonjobapi.herokuapp.com/api/user</p> <em> Method : POST <em>
<p>job_title</p> 
<p>job_type</p> 
<p>job_categories</p> 
<p>work_conditions</p> 
<p>job_descriptions</p>
<em> The id for type, category, work_conditions has to exist, a user can't create a job with one that does not exist </em>
    
<h4> Show specific job </h4>
<p>https://malonjobapi.herokuapp.com/api/user/{jobId}</p> <em> Method : GET <em> 
    
<h4>  Update specific job </h4>
<p>https://malonjobapi.herokuapp.com/api/user/{jobId}</p> <em> Method : PUT <em>
<p>job_title</p> 
<p>job_type</p> 
<p>job_categories</p> 
<p>work_conditions</p> 
<p>job_descriptions</p> 
    
<h4>  Delete specific job </h4>
<p>https://malonjobapi.herokuapp.com/api/user/{jobId}</p> <em> Method : DELETE <em>  
    



