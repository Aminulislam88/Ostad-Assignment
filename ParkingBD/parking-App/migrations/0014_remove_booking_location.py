# Generated by Django 4.1.2 on 2022-12-02 10:36

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('parkingApp', '0013_booking_location'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='booking',
            name='location',
        ),
    ]