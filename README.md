## Scenario

We have received feedback from our users on the new Task Management product (TM Tool) we have been working on. The TM Tool aims to provide Project Managers a way to more efficiently manage their team’s daily tasks compared to using Excel or other tracking tools. It is important that our product supports our clients Kanban style of working and we can the product to match functionality available in our competitors’ products, like Jira and Trello. 

Our Product Team have identified the most important features that should be worked on, based on user and business needs. They have formulated 6 small user stories with the scrum team, which are to be built next. 
A Mock-up of the idea is shown here: 

![Example board](/storage/app/example-board.PNG)

> As a Project Manager
> I can see all my team’s Tasks on a Kanban board
> So that my team knows which tasks need to be done and its status
> 
> __Acceptance Criteria__
> 1.	As a Project manager I can view all Tasks that have been created on a Kanban Style board
> 2.	There are 3 separate columns on the board, which represent the following Task Statuses: 
>   a.	To Do
>   b.	In Progress
>   c.	Done
> 3.	Tasks should appear in the correct column based on their Status *(e.g.> , ‘To Do’ Tasks appear in the ‘To Do’ column)
> 4.	I can access this board from another machine (after a refresh) to see the up-to-date state of the board. 

> As a Project Manager
> I can update the status of a Task by dragging-and-dropping it between status columns.
> so that I can quickly update the status in a visual way 
> 
> __Acceptance Criteria__
> 1.	As a Project Manager, I can interact with a Task in any column of the Kanban board and drag-and-drop this into any of the other columns on the Kanban board.
> 3.	I can abandon this movement by dropping the Task back to its original position on the Kanban board 

> As a Project Manager
> I can edit the description details of a Task
> so that I can document any new information I have found out for the Task I need to do
> 
> __Acceptance Criteria__
> 1.	As a project manager, when viewing a task on the Kanban board, there is a button icon on a Task that indicates that it can be edited.
> 2.	If I click on the button icon, the task becomes editable, and I can enter a new text value into the description field.

> As a Project Manager
> I can create a new Task when I am on the Kanban board.
> So that my team can see these new task items on the Kanban board 
> 
> __Acceptance Criteria__
> 1.	As a Project Manager, when I am on the Kanban board, there is a way for me to create a new empty task for each status column

> As a Project Manager
> I can drag-and-drop to manually order Tasks within a column
> So that my team can see the most important items to work on at the top of each column
> 
> __Acceptance Criteria__
> 1.	As a project manager, when viewing the Kanban board, I can drag-and-drop Tasks into an order I like within a column
> 2.	When I drag and drop a Task above another Task, the item that I have moved should replace its position.
> 3.	When I drag a Task below another Task, the Task that I am moving should position below the other task.

> As a Project Manager
> I can delete a Task from the Kanban board 
> So that my team no longer see this Task on the board 
> 
> __Acceptance Criteria__
> 1.	As a project manager, when viewing the Kanban board, there is an icon button for each task that indicates it can be deleted.
> 2.	If I interact with the icon button, the task is removed from the Kanban board, and cannot be seen by any user 


## Setup the project
```
composer install
```
```
npm install
```
```
Copy .env.example into new .env file
```
```
./vendor/bin/sail up
```
```
./vendor/bin/sail artisan migrate
```
```
./vendor/bin/sail artisan db:seed
```

## Contact/Support

This test is new and may be missing some details. If there is anything you feel could be improved or you have any questions feel free to contact:

- [Luke Thompson](mailto:thompsl1134@gmail.com) - Developer
