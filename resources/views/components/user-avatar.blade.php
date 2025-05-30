@props(['user', 'size' => 'w-12 h-12'])

@if ($user->image)
    <img src="{{ $user->imageurl() }}" alt="{{ $user->name }}" class="{{ $size }} rounded-full">
@else
    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Dummy Avatar"
        class="{{ $size }} rounded-full">
@endif