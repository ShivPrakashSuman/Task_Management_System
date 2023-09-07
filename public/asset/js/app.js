CKEDITOR.replace('editor1', {
    // Define the toolbar groups as it is a more accessible solution.
    toolbarGroups: [{
        "name": "description",
        "groups": ["basicstyles"]
      },
      {
        "name": "paragraph",
        "groups": ["list", "blocks"]
      },
      {
        "name": "document",
        "groups": ["mode"]
      },
      {
        "name": "insert",
        "groups": ["insert"]
      },
      {
        "name": "styles",
        "groups": ["styles"]
      },
      {
        "name": "about",
        "groups": ["about"]
      }
    ]
  });