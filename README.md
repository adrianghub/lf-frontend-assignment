# Frontend recruitment task

## Installation
Prerequisites:
* Install PHP 7.4 [Ubuntu instruction](https://computingforgeeks.com/how-to-install-php-on-ubuntu/)
* Install composer [Instruction](https://getcomposer.org/download/)
* Install Symfony CLI [Instruction](https://symfony.com/download)

Setting up
* Install dependencies `composer install`
* Go to public folder and run local web server: `cd public/ && symfony server:start`
* Go to provided url in your browser

## The task

Candidate task is to implement template using provided template variables
according to provided design which can be found as AdobeXD file or
PDF inside this repository (`design.pdf`,`design.xd`).

This task requires candidate to create twig templates with use of provided variables
and style them according to presented design. 
This closely resembles potential task candidate can encounter in his day-to-day work with
PHP CMS systems such as Drupal.

### Acceptance criteria
- Design is implemented inside a template called `task.html.twig` found in `templates` folder.
- Candidate can add any css/js needed inside `public/assets/main.{js,css}` - this can be a target
  build tool target, if such is added candidate is required to provide complete
  documentation on how to run the compilation process, process should be seamless and not require
  any more tooling on reviewers side (`node/npm` is assumed).
- Candidate is not allowed to edit variables inside the `public/index.php`
- Design needs to be responsive supporting both mobile and desktop views - sizes specified in design
  are enough that is needed for this task.
- There is a special mobile behaviour, only the first paragraph is visible to the user
  before he clicks the `read more` button. This is only applied on mobile screens. Please be concerned
  with accessibility of chosen solution.
- Solution is presented to a reviewer in form of a link to public github repository.
