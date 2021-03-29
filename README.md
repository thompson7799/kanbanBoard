<p align="center"><img src="https://f9q6e2t7.stackpathcdn.com/wp-content/uploads/sites/3/2020/11/Software-Development.svg?x31688" width="200"></p>

## About this challenge

This challenge requires a strong knowledge of: Javascript, PHP, [Vuex](https://vuex.vuejs.org/) and [Laravel](https://laravel.com/). It also requires basic knowledge of: [Vue](https://vuejs.org/), CSS and [SCSS](https://sass-lang.com/).

Estimated completion time is around 4 hours although you may take as long as you need.

## Scenario

Am existing client has come to The Changing Workplace requesting a way that they can more efficiently manage some of their internal tasks. They have been inspired by systems like [Jira](https://www.atlassian.com/software/jira) and [Trello](https://trello.com/en-GB) and want an area to manage their tasks in a similar way.

These systems utilise a [Kanban board](https://www.atlassian.com/agile/kanban/boards) which allows the user to to manage their tickets into groups and move them between them as the task progresses.

__The project owner has raised the following story:__

> ## Kanban style task organisation system
>
> ### As a User:
> - I should be able to see tickets on a Kanban style board.
>     - I should be able to see all kanban groups.
>     - I should be able to see all kanban cards organised into groups.
> - I should be able to sort the groups on the board via drag/drop
> - I should be able to sort cards on the board via drag/drop.
>     - I should be able to move a card from any group to any other
>     - I should be able to reorder cards inside a group.
> - I should be able to add a blank card to a group.
> - I should be able to edit the content of any card.
> - I should be able to remove any card.
> - I should be able to access the board on another machine and (after a refresh) see the up to date state of the board.
>
> ![Example Board](/storage/app/example-board.PNG)

## Existing Code

This repository provides some existing code to speed up your development process. __All of the code provided should be considered a suggestion__, feel free to rewrite/optimise anything that has been provided.

### Vue Components (```/resources/js/components```)


- __KanbanBoard.vue__ - Wrapper component for the Kanban board with drag and drop set up on columns/cards.
- __KanbanColumn.vue__ - Basic styling for a column with a title.
- __KanbanItem.vue__ - Basic styling for an editable card.

> Note: The drag and drop library used is [VueDraggable](https://github.com/SortableJS/Vue.Draggable#readme) based on the [Sortable.js](https://github.com/SortableJS/Sortable) library. See their documentation for more details.

### Vuex (```/resources/js/store```)

- __index.js__ - Vuex store set up to use modules.
- __modules/kanban.js__ - Vuex module for handling the kanban board.

## Setup the project

See the [Laravel 8.x documentation](https://laravel.com/docs/8.x/installation) for a full guide on setting up a Laravel project.

For a quick start (if you have Docker avaliable) you can run:

```
./vendor/bin/sail up
```

this will set up containers for a webserver, MySql database etc. automatically.

Once that is set up you will need to install the NPM packages with:

```
npm install
```
__OR__
```
yarn
```

and run the Vue development server with:

```
npm run hot
```
__OR__
```
yarn hot
```

## Contact/Support

This test is new and may be missing some details. If there is anything you feel could be improved or you have any questions feel free to contact:

- [Carl Whittick](mailto:carl.whittick@changingworkplace.com) - Developer
- [Christine Pilon](mailto:christine.pilon@changingworkplace.com) - IT Manager
