<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <form method="post" action="{{ route('saveclassification') }}">
                @csrf
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1"
                            aria-describedby="eameHelp" placeholder="Enter Name">

                    </div>
                </div>



                <div>
                    <label>States<span>*</span></label>
                    <div class="dropdown-container">
                        <div class="dropdown-button noselect form-control">
                            <div class="dropdown-label"></div>
                            <div class="dropdown-quantity"><span class="quantity"></span></div>
                            <span class="down-arrow">▼</span>
                        </div>
                        <div class="dropdown-list" style="display: none;">
                            <input type="search" placeholder="Search states" class="dropdown-search">
                            <ul id="pac">

                                @foreach ($classifications as $classification)
                                    <li style="display: list-item;"><input name="classification_ids[]"
                                            {{ old('classification_ids') != '' && in_array($classification->id, old('classification_ids')) ? 'checked' : '' }}
                                            value="{{ $classification->id }}" type="checkbox"><label
                                            for="AL">{{ $classification->name }}</label></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
</script>
<script>
    $('.dropdown-container')
        .on('click', '.dropdown-button', function() {
            $(this).siblings('.dropdown-list').toggle();
        })
        .on('input', '.dropdown-search', function() {
            var target = $(this);
            var dropdownList = target.closest('.dropdown-list');
            var search = target.val().toLowerCase();

            if (!search) {
                dropdownList.find('li').show();
                return false;
            }

            dropdownList.find('li').each(function() {
                var text = $(this).text().toLowerCase();
                var match = text.indexOf(search) > -1;
                $(this).toggle(match);
            });
        })

    $('.dropdown-list input[type="checkbox"]').on('click', function() {

        var title = $(this).closest('.dropdown-list').find('input[type="checkbox"]').val(),
            title = $(this).val() + ",";

        if ($(this).is(':checked')) {
            var html = '<span title="' + title + '">' + title + '</span>';
            $('.quantity').append(html);
            $(".hida").hide();
        } else {
            $('span[title="' + title + '"]').remove();
            var ret = $(".hida");
            $('.dropdown dt a').append(ret);

        }
    });
</script>

</html>
