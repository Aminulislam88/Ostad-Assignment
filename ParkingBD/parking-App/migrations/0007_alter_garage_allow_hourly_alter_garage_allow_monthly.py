# Generated by Django 4.1.2 on 2022-11-25 07:05

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('parkingApp', '0006_alter_garage_cctv_alter_garage_gaurd_and_more'),
    ]

    operations = [
        migrations.AlterField(
            model_name='garage',
            name='allow_hourly',
            field=models.BooleanField(),
        ),
        migrations.AlterField(
            model_name='garage',
            name='allow_monthly',
            field=models.BooleanField(),
        ),
    ]
