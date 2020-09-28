<!DOCTYPE html>
<html lang="en" class="html--stretched">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet"/>
</head>
<body class="layout">
    <header class="header">
        <h1 class="h-margin-vertical-large h-align-center h-text-uppercase">Create a register</h1>
    </header>
    <main id="app" class="main">
            <div class="grid">
                <div class="grid__cell -width-2/3--m -center">
                    <validated-form-register inline-template action="{{ action('RegisterController@save') }}" method="post">
                        <div v-cloak>
                            <div class="alerts--docked">
                            <div class="-medium"
                                 :class="messageClass">@{{ message }}</div>
                            </div>
                            <form @submit.prevent="onSubmit"
                                  @keydown="form.errors.clear($event.target.name);">
                                <div class="h-margin-vertical">
                                    <label class="label--required" for="name">
                                        Name
                                    </label>
                                    <input type="text" id="name" name="name"
                                           :class="{ '-invalid': form.errors.has('name') }"
                                           v-model="form.name">
                                    <div class="alert--error -small -for-field"
                                         v-if="form.errors.has('name')"
                                         v-text="form.errors.get('name')"></div>
                                </div>

                                <div class="h-margin-vertical">
                                    <label class="label--required" for="description">Description</label>
                                    <input type="text" id="description" name="description"
                                           :class="{ '-invalid': form.errors.has('description') }"
                                           v-model="form.description">
                                    <div class="alert--error -small -for-field"
                                         v-if="form.errors.has('description')"
                                         v-text="form.errors.get('description')"></div>
                                </div>

                                <div class="h-margin-vertical">
                                    <button class="button--primary"
                                            :disabled="form.errors.any()">Create project</button>
                                </div>
                            </form>
                        </div>
                    </validated-form-register>
                </div>
            </div>
        </div>
    </main>
    <footer class="h-padding-small h-align-center">

    </footer>
    <script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>