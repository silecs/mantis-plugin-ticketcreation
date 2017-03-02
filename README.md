Ticket Creation, a Mantis Plugin
===============

This plugin add a new web page to report a bug.
The difference with the official page is that it can be pre-filled in the initial HTTP request.
For instance, the project ID is read from the URL instead od the Mantis session.

Install
-------

```
cd plugins/
git clone <git-url> TicketCreation
```

Then use the URL `/plugin.php?page=TicketCreation/bugreport&project_id=XXX`.
