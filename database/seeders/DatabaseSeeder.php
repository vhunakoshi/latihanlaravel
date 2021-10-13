<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Taufiq Hidayat',
            'username' => 'vhunakoshi',
            'email' => 'vhunakoshi@gmail.com',
            'password' => bcrypt('mautauaja')
        ]);

        User::factory(3)->create();
        Post::factory(20)->create();
        Category::factory(3)->create();

        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);


        // User::create([
        //     'name' => 'Taufiq Hidayat',
        //     'email' => 'taufiqvhunakoshi@gmail.com',
        //     'password' => bcrypt('mautauaja')
        // ]);

        // User::create([
        //     'name' => 'Bambang Pemangkas',
        //     'email' => 'bambangpemangkas@gmail.com',
        //     'password' => bcrypt('mautauaja')
        // ]);

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'Web Design'
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint est fuga odio suscipit doloremque quis fugit sit libero dicta assumenda!',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, consequuntur soluta optio error sit amet incidunt sunt. Voluptatem odio quam sit tenetur, iste ex, magnam nisi excepturi aperiam corporis mollitia, culpa voluptatibus cupiditate ut autem consequuntur sed aspernatur optio esse voluptate. Error quisquam perferendis voluptas repellat nesciunt pariatur ullam temporibus aperiam placeat dolorum unde rem impedit ipsam et aliquam provident, eligendi voluptates recusandae at, quis explicabo. Praesentium adipisci accusantium amet quis. Modi quasi minus itaque delectus cupiditate architecto, praesentium error voluptate vero ab deleniti expedita cum beatae blanditiis asperiores incidunt soluta eius doloribus repudiandae reprehenderit! Eos nobis atque possimus adipisci corporis reiciendis quas, placeat sequi maxime labore veritatis quasi quidem quaerat. Ipsam pariatur aperiam, laborum accusantium eos repudiandae minima doloremque ducimus ad nihil amet fugit facilis est officiis tempore reiciendis saepe obcaecati laudantium in soluta alias assumenda ullam recusandae. Error consequatur, quasi tenetur aliquam modi saepe ipsam ea nostrum numquam nemo dolor accusantium neque similique. Quasi quos possimus illo laudantium. Repudiandae minus ratione dignissimos totam iure eligendi ea molestias laudantium officiis, eaque, autem amet atque cum rerum ut aliquid! Illo iure fuga error incidunt harum cum iste tempora eligendi placeat a blanditiis impedit nesciunt, id sit quasi alias beatae at.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint est fuga odio suscipit doloremque quis fugit sit libero dicta assumenda!',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, consequuntur soluta optio error sit amet incidunt sunt. Voluptatem odio quam sit tenetur, iste ex, magnam nisi excepturi aperiam corporis mollitia, culpa voluptatibus cupiditate ut autem consequuntur sed aspernatur optio esse voluptate. Error quisquam perferendis voluptas repellat nesciunt pariatur ullam temporibus aperiam placeat dolorum unde rem impedit ipsam et aliquam provident, eligendi voluptates recusandae at, quis explicabo. Praesentium adipisci accusantium amet quis. Modi quasi minus itaque delectus cupiditate architecto, praesentium error voluptate vero ab deleniti expedita cum beatae blanditiis asperiores incidunt soluta eius doloribus repudiandae reprehenderit! Eos nobis atque possimus adipisci corporis reiciendis quas, placeat sequi maxime labore veritatis quasi quidem quaerat. Ipsam pariatur aperiam, laborum accusantium eos repudiandae minima doloremque ducimus ad nihil amet fugit facilis est officiis tempore reiciendis saepe obcaecati laudantium in soluta alias assumenda ullam recusandae. Error consequatur, quasi tenetur aliquam modi saepe ipsam ea nostrum numquam nemo dolor accusantium neque similique. Quasi quos possimus illo laudantium. Repudiandae minus ratione dignissimos totam iure eligendi ea molestias laudantium officiis, eaque, autem amet atque cum rerum ut aliquid! Illo iure fuga error incidunt harum cum iste tempora eligendi placeat a blanditiis impedit nesciunt, id sit quasi alias beatae at.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint est fuga odio suscipit doloremque quis fugit sit libero dicta assumenda!',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, consequuntur soluta optio error sit amet incidunt sunt. Voluptatem odio quam sit tenetur, iste ex, magnam nisi excepturi aperiam corporis mollitia, culpa voluptatibus cupiditate ut autem consequuntur sed aspernatur optio esse voluptate. Error quisquam perferendis voluptas repellat nesciunt pariatur ullam temporibus aperiam placeat dolorum unde rem impedit ipsam et aliquam provident, eligendi voluptates recusandae at, quis explicabo. Praesentium adipisci accusantium amet quis. Modi quasi minus itaque delectus cupiditate architecto, praesentium error voluptate vero ab deleniti expedita cum beatae blanditiis asperiores incidunt soluta eius doloribus repudiandae reprehenderit! Eos nobis atque possimus adipisci corporis reiciendis quas, placeat sequi maxime labore veritatis quasi quidem quaerat. Ipsam pariatur aperiam, laborum accusantium eos repudiandae minima doloremque ducimus ad nihil amet fugit facilis est officiis tempore reiciendis saepe obcaecati laudantium in soluta alias assumenda ullam recusandae. Error consequatur, quasi tenetur aliquam modi saepe ipsam ea nostrum numquam nemo dolor accusantium neque similique. Quasi quos possimus illo laudantium. Repudiandae minus ratione dignissimos totam iure eligendi ea molestias laudantium officiis, eaque, autem amet atque cum rerum ut aliquid! Illo iure fuga error incidunt harum cum iste tempora eligendi placeat a blanditiis impedit nesciunt, id sit quasi alias beatae at.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint est fuga odio suscipit doloremque quis fugit sit libero dicta assumenda!',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, consequuntur soluta optio error sit amet incidunt sunt. Voluptatem odio quam sit tenetur, iste ex, magnam nisi excepturi aperiam corporis mollitia, culpa voluptatibus cupiditate ut autem consequuntur sed aspernatur optio esse voluptate. Error quisquam perferendis voluptas repellat nesciunt pariatur ullam temporibus aperiam placeat dolorum unde rem impedit ipsam et aliquam provident, eligendi voluptates recusandae at, quis explicabo. Praesentium adipisci accusantium amet quis. Modi quasi minus itaque delectus cupiditate architecto, praesentium error voluptate vero ab deleniti expedita cum beatae blanditiis asperiores incidunt soluta eius doloribus repudiandae reprehenderit! Eos nobis atque possimus adipisci corporis reiciendis quas, placeat sequi maxime labore veritatis quasi quidem quaerat. Ipsam pariatur aperiam, laborum accusantium eos repudiandae minima doloremque ducimus ad nihil amet fugit facilis est officiis tempore reiciendis saepe obcaecati laudantium in soluta alias assumenda ullam recusandae. Error consequatur, quasi tenetur aliquam modi saepe ipsam ea nostrum numquam nemo dolor accusantium neque similique. Quasi quos possimus illo laudantium. Repudiandae minus ratione dignissimos totam iure eligendi ea molestias laudantium officiis, eaque, autem amet atque cum rerum ut aliquid! Illo iure fuga error incidunt harum cum iste tempora eligendi placeat a blanditiis impedit nesciunt, id sit quasi alias beatae at.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
