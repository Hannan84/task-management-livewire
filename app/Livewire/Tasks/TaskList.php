<?php
namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class TaskList extends Component
{
 use WithPagination;

 public $newTask = '';

 public function addTask()
 {
  $this->validate([
   'newTask' => 'required|min:2',
  ]);

  Task::create(['title' => $this->newTask]);

  $this->newTask = '';
  session()->flash('message', 'Task added!');
 }

 public function toggle($taskId)
 {
  $task            = Task::find($taskId);
  $task->completed = ! $task->completed;
  $task->save();
 }

 public function delete($taskId)
 {
  Task::destroy($taskId);
 }

 public function render()
 {
  return view('livewire.tasks.task-list', [
   'tasks' => Task::latest()->paginate(5),
  ])->layout('system.app');
 }
}
