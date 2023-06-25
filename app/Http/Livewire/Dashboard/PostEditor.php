<?php

namespace App\Http\Livewire\Dashboard;


use illuminate\Support\str;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class PostEditor extends Component
{
    public $post;
    protected $rules = [
        'post.title' => 'required|min:6',
        'post.body' => '',
        'post.image'=>'',
        'post.slug'=>'',
        'post.excerpt'=>'',
        'post.type'=>'',
        'post.featured'=>'',
        'post.meta_title'=>'',
        'post.meta_description'=>'',
        'post.meta-schema'=>'',
        'post.meta_data'=>'',
    ];
    public function mount(Post $post){
        if (isset ($post)){
             $this->post = $post;
        } else {
        $this->post = new Post;
        }
        $this->post = new Post;
    }
    public function savePost(){
     $Validator=Validator::make($this->getDataForValidation($this->rules),$this->rules);
         if($Validator->fails())
         {
            $this->dispatchBrowserEvent('notifications-show',[
                'type'=>'error',
                'message' =>$Validator->errors()->first()
              ]);
              return;
         }
           $arr['id']= $id;
         $this->post->user_id = auth()->user()->id;
          if(!isset($this->post->id)){
          $this->post->slug = str::slug($this->post->title);
          }
          foreach($this->post->toArray() as $column =>$value)
          {
            if(is_null($value)){
               unset($this->post->{$column});
            }
          }

          $this->post->save();

          $this->dispatchBrowserEvent('set-url',[
           'url' => '/edit/'.$this->post->id
          ]);
          $this->dispatchBrowserEvent('notifications-show',[
            'type'=>'success',
            'message'=>'successfully Saved'
          ]);


    }
    public function render()
    {
        return view('livewire.dashboard.post-editor')->extends('dashboard.layout');
    }
}
