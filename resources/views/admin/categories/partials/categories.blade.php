@foreach ($categories as $category_list)
  <option value="{{$category_list->id or ""}}"
    @isset($category->id)
      @if ($category->parent_id == $categoty_list->id)
        selected=""
      @endif

      @if ($category->id == $categoty_list->id)
        hidden=""
      @endif

    @endisset
    >
    {!! $delimeter or "" !!} {{$category_list->title or ""}}
  </option>

  @if (count($category_list->children) > 0 )
    @include('admin.categories.partials.categories', [
      'categories' => $category_list->children,
      'delimiter' => ' - ' . $delimeter
    ])
  @endif
@endforeach
