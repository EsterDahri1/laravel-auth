# API

1. in the api.php 

```
Route::get('posts', function(){
    return response()->json([
        'status' => 'success',
        'result' => Post::all()
    ]);
})

import up the post model

Route::get('categories', function(){
    return response()->json([
        'status' => 'success',
        'result' => App\Models\Category::all()
    ]);
})

or

Route::get('categories', function(){
    return response()->json([
        'success' => true,
        'ester' => 'ester',
        'result' => App\Models\Category::all()
    ]);
})
```

2. make a new collection with api postman new request paste the url of our api (in browser 171...8000/api/projects) and send 

3. to see our api is necessary to use this URL /api/posts

4. from terminal
```
npm create vite@latest nameofproject -- --template vue

npm i 

npm run dev

```
5. to paginate 
```
Route::get('posts', function(){
    return response()->json([
        'status' => 'success',
        'ester' => 'ester',
        'result' => Post::paginate(5)
    ]);
})

or

Route::get('posts', function(){
    $posts = Post::paginate(5);
    return response()->json([
        'success' => true,
        'ester' => 'ester',
        'result' => $posts
    ]);
})
```
6. to see the pages 

in the url ?page=numberofpage

7. how to browse trough pages
```
axios.get(`$(this.baseURL))
```
8. to use eloquent use the function ::with 

9. create a vite app

10. mechanism of protection corse 

11. App.vue

```
import axios from 'axios';
export default{
    name:'App'
    data(){
    return[
        blog_api: 'https://127.0.0.1:8002/api/posts',
        posts:[],
    ],
    }
    mounted(){}
        axios
        .get('this.blog_api')
        .then(response->{
            console.log(response)
            this.posts = response.data.result
        })
        .catch(err ->{
            console.error(err);
        })
    
    }
}

remove scoped ecc.

delete everything from css file

```

12. npm i axios

13. bootstrap has a deafult pagination
