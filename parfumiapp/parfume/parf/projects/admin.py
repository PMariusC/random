from django.contrib import admin
from projects.models import Project


class ProjectAdmin(admin.ModelAdmin):
    pass


admin.site.register(Project, ProjectAdmin)
from django.contrib import admin

# Register your models here.
