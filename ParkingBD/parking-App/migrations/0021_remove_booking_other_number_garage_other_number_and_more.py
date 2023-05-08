# Generated by Django 4.1.2 on 2022-12-02 17:00

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('parkingApp', '0020_booking_other_number'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='booking',
            name='other_number',
        ),
        migrations.AddField(
            model_name='garage',
            name='other_number',
            field=models.CharField(blank=True, max_length=15, null=True),
        ),
        migrations.AddField(
            model_name='garage',
            name='phone_number',
            field=models.CharField(default=12345678, max_length=15),
            preserve_default=False,
        ),
    ]
