<!doctype html>
<html lang="en">

@include('inc.head') <!-- TODO CSS via vite (second to last priority) -->

<body>

<!-- TODO REST API with authorization according to the manual -->
@include('inc.menu') <!-- TODO Link to API / create an API page with authorization, buttons, and VUE output (last priority)-->
@include('inc.hero')

<main id="main">

    @include('inc.features')
    @include('inc.about')
    @include('inc.team') <!-- TODO Vue team output with pagination -->
    @include('inc.opinions') <!-- TODO Vue reviews output with element fading effect -->
    @include('inc.contacts') <!-- TODO Vue application submission form -->

</main>

@include('inc.footer') <!-- TODO JS via vite (second to last priority) -->



</body></html>