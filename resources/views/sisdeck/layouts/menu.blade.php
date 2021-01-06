<li class="{{ Route::currentRouteName() == 'sisdeck.classes.index' || Route::currentRouteName() == 'sisdeck.classes.create' || Route::currentRouteName() == 'sisdeck.classes.show' || Route::currentRouteName() == 'sisdeck.classes.edit' ? 'active' : '' }}">
    <a href="{{ route('sisdeck.classes.index') }}"><i class="fas fa-fw fa-edit mr-2"></i><span>Classes</span></a>
</li>
<li class="{{ Route::currentRouteName() == 'sisdeck.classrooms.index' || Route::currentRouteName() == 'sisdeck.classrooms.create' || Route::currentRouteName() == 'sisdeck.classrooms.show' || Route::currentRouteName() == 'sisdeck.classrooms.edit' ? 'active' : '' }}">
    <a href="{{ route('sisdeck.classrooms.index') }}"><i class="fas fa-fw fa-edit mr-2"></i><span>Classrooms</span></a>
</li>
<li class="{{ Route::currentRouteName() == 'sisdeck.levels.index' || Route::currentRouteName() == 'sisdeck.levels.create' || Route::currentRouteName() == 'sisdeck.levels.show' || Route::currentRouteName() == 'sisdeck.levels.edit' ? 'active' : '' }}">
    <a href="{{ route('sisdeck.levels.index') }}"><i class="fas fa-fw fa-edit mr-2"></i><span>Levels</span></a>
</li>
<li class="{{ Route::currentRouteName() == 'sisdeck.batches.index' || Route::currentRouteName() == 'sisdeck.batches.create' || Route::currentRouteName() == 'sisdeck.batches.show' || Route::currentRouteName() == 'sisdeck.batches.edit' ? 'active' : '' }}">
    <a href="{{ route('sisdeck.batches.index') }}"><i class="fas fa-fw fa-edit mr-2"></i><span>Batches</span></a>
</li>
<li class="{{ Route::currentRouteName() == 'sisdeck.shifts.index' || Route::currentRouteName() == 'sisdeck.shifts.create' || Route::currentRouteName() == 'sisdeck.shifts.show' || Route::currentRouteName() == 'sisdeck.shifts.edit' ? 'active' : '' }}">
    <a href="{{ route('sisdeck.shifts.index') }}"><i class="fas fa-fw fa-edit mr-2"></i><span>Shifts</span></a>
</li>
<li class="{{ Route::currentRouteName() == 'sisdeck.courses.index' || Route::currentRouteName() == 'sisdeck.courses.create' || Route::currentRouteName() == 'sisdeck.courses.show' || Route::currentRouteName() == 'sisdeck.courses.edit' ? 'active' : '' }}">
    <a href="{{ route('sisdeck.courses.index') }}"><i class="fas fa-fw fa-edit mr-2"></i><span>Courses</span></a>
</li>
