Psy Shell v0.9.8 (PHP 7.2.10 — cli) by Justin Hileman
>>> 2 + 2
=> 4
>>> $a = 1
=> 1
>>> $a +1
=> 2
>>> $a
=> 1
>>> App\Task::all()
=> Illuminate\Database\Eloquent\Collection {#2898
     all: [],
   }
>>> App\Task::first()
=> null
>>> $task = new App\Task ;
=> App\Task {#2891}
>>> $task->title = 'Makan';
=> "Makan"
>>> $task->description = 'Makan makanan bergizi';
=> "Makan makanan bergizi"
>>> $task->save()
=> true
>>> App\Task::all()
=> Illuminate\Database\Eloquent\Collection {#2901
     all: [
       App\Task {#2902
         id: 1,
         title: "Makan",
         description: "Makan makanan bergizi",
         created_at: "2018-10-13 09:14:04",
         updated_at: "2018-10-13 09:14:04",
       },
     ],
   }
>>> App\Task::first()
=> App\Task {#2904
     id: 1,
     title: "Makan",
     description: "Makan makanan bergizi",
     created_at: "2018-10-13 09:14:04",
     updated_at: "2018-10-13 09:14:04",
   }
>>> $task = new App\Task
=> App\Task {#2895}
>>> $task->title = 'Minum';
=> "Minum"
>>> $task->description = 'Kopi';
=> "Kopi"
>>> $task->save()
=> true
>>> App\Task::all()
=> Illuminate\Database\Eloquent\Collection {#2892
     all: [
       App\Task {#2898
         id: 1,
         title: "Makan",
         description: "Makan makanan bergizi",
         created_at: "2018-10-13 09:14:04",
         updated_at: "2018-10-13 09:14:04",
       },
       App\Task {#2894
         id: 2,
         title: "Minum",
         description: "Kopi",
         created_at: "2018-10-13 09:17:37",
         updated_at: "2018-10-13 09:17:37",
       },
     ],
   }
>>> App\Task::fist()
BadMethodCallException with message 'Call to undefined method App/Task::fist()'
>>> App\Task::first()
=> App\Task {#2909
     id: 1,
     title: "Makan",
     description: "Makan makanan bergizi",
     created_at: "2018-10-13 09:14:04",
     updated_at: "2018-10-13 09:14:04",
   }
>>> App\Task::latest()->first()
=> App\Task {#2904
     id: 2,
     title: "Minum",
     description: "Kopi",
     created_at: "2018-10-13 09:17:37",
     updated_at: "2018-10-13 09:17:37",
   }
>>> App\Task::all()[0]
=> App\Task {#2903
     id: 1,
     title: "Makan",
     description: "Makan makanan bergizi",
     created_at: "2018-10-13 09:14:04",
     updated_at: "2018-10-13 09:14:04",
   }
>>> App\Task::all()[1]
=> App\Task {#2891
     id: 2,
     title: "Minum",
     description: "Kopi",
     created_at: "2018-10-13 09:17:37",
     updated_at: "2018-10-13 09:17:37",
   }
>>> App\Task::all()[1]->title
=> "Minum"
>>> App\Task::first()->title
=> "Makan"
>>> App\Task::all()->map->title
=> Illuminate\Support\Collection {#2904
     all: [
       "Makan",
       "Minum",
     ],
   }
>>>