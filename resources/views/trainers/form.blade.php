<div class="form-group">
    <label for="">Nombre</label>
    <input type="text" name="name" value="{{ old('name',  isset($trainer->name) ? $trainer->name : null) }}"   class="form-control">
</div>
<div class="form-group">
    <label for="">Slug</label>
    <input type="text"  name="slug" value="{{ old('slug',  isset($trainer->slug) ? $trainer->slug : null) }}" class="form-control">
</div>
<div class="form-group">
    <label for="">Descripción</label>
    <textarea name="description" class="form-control" rows="3">{{old('description',  isset($trainer->description) ? $trainer->description : null) }}</textarea>
</div>
<div class="form-group">
    <label for="">Avatar</label>
    <input type="file" name="avatar">
</div>
