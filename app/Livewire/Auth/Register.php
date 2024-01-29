<?php

namespace App\Livewire\Auth;

use App\Repositories\Auth\AuthRepository;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

#[Layout('layout.auth.index')]
#[Title('register')]
class Register extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $image;

    public function register(AuthRepository $authRepository)
    {
        $formData = $this->validate();

        if ($this->image) {
            $formData['image'] = $this->image->store('usersLogo', 'public');
        }

        $authRepository->create($formData);
        return redirect(route('login'))->with('success', 'user has been created try to login now!');
    }

    public function rules()
    {
        return [
            'name' => ['required', 'min:3', 'max:50'],
            'email' => ['required', 'unique:users,email'],
            'password' => 'required',
            'password_confirmation' => 'required_with:password|same:password|min:6',
            'image' => 'nullable|image|sometimes|max:1024'
        ];
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
