CREATE TABLE [dbo].[tb_usuarios](
	[idusuario] [int] IDENTITY(1,1) NOT NULL ,
	[deslogin] [varchar](64) NULL,
	[dessenha] [varchar](256) NULL,
	[dtcadastro] [datetime] default CURRENT_TIMESTAMP NULL,
 CONSTRAINT [PK_tb_usuarios] PRIMARY KEY CLUSTERED 
(
	[idusuario] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO

INSERT INTO [dbo].[tb_usuarios]
           ([deslogin]
           ,[dessenha]
           ,[dtcadastro])
     VALUES
           ('user'
           ,'1q22we'
           ,GETDATE()
		   )
GO

INSERT INTO [dbo].[tb_usuarios]
           ([deslogin]
           ,[dessenha]
           ,[dtcadastro])
     VALUES
           ('root'
           ,'1q22we'
           ,GETDATE()
		   )
GO

INSERT INTO [dbo].[tb_usuarios]
           ([deslogin]
           ,[dessenha]
           ,[dtcadastro])
     VALUES
           ('rafael.fischer'
           ,'1q22we'
           ,GETDATE()
		   )
GO



select * from dbo.tb_usuarios
insert into tb_usuarios (deslogin, dessenha) values ('user', '1q2w3e')