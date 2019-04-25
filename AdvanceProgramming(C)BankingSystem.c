//Header files
#include<stdio.h>
#include<stdlib.h>
#include<string.h>
// Global variables
int acno;               //var to generate account number automatically
int ex,ex1;             //var for termination of do..while loops
//Structure to hold the information of the account holders
struct user
{
	int accno;
	char pswd[10];
	char name[50];
	char btype[50];
	int bal;
	struct user *linkk;
};
//User defined functions
void append(struct user **q,int n);                   //create account
int display(struct user **l);
void displaybytype(struct user **l,int c);
void deposit(struct user **q,int ac);
void widthraw(struct user **q,int ac);
int view(struct user **q,int ac);
void delacc(struct user **q,int ac);                    //delete account
int cmp(struct user **q,int ac,char ps[20]);            //validation of account number and passwords
int searchacc(struct user **q,int ac);                  //account number is searched
void trans(struct user **q,int ac);
void main()
{
    ex=1,ex1=1;
	struct user *ptr=NULL;

	//pre-defined admin ID and Password
	char id[10]="Admin";
	char pswd[10]="admin";

	char aid[10],apswd[10];
	int choice,choice1;
	//var u and p to compare the pre-defined values of admin info
	//var un is the input var used to get the user's account number
	int u,p,uch,un,c;
	//var up is used to get the user's account's password
	char up[15];
    acno=1000;

    printf("\t\t\t========================================\n");
    printf("\t\t\t          WELCOME TO XYZ! BANK          \n");
    printf("\t\t\t========================================\n\n\n");
    do
    {
        printf("\n!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n");
        printf("\t\tADMIN - Press 1(Can CREATE, SEARCH,DISPLAY)\n\t\tACCOUNT HOLDER - Press 2(DEPOSIT,WIDTHRAW,TRANSFER,DELETE,VIEW)\n");
        printf("=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=\n");
        printf("Enter your Choice: ");
        scanf("%d",&choice);
        switch(choice)
        {
        case 1: printf("\n          WELCOME TO XYZ! ADMIN          \n");
                printf("     Enter the ID please: ");
                scanf("%s",aid);
                printf("\n     Enter the password please: ");
                scanf("%s",apswd);

                u=strcmp(aid,id);
                p=strcmp(apswd,pswd);

                if((u==0) && (p==0))
                {

                    do
                    {
                        printf("\n!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n");
                        printf("\n\t\tTo create an account - Press 1\n\t\tSearch Account by AccountTYPE & its Count - Press 2\n\t\tTo display all accounts- Press 3\n");
                        printf("Your Choice: ");
                        scanf("%d",&choice1);
                        if(choice1==3)
                        {
                            printf("\n\t------Display all accounts-----\n");
                            int a = display(&ptr);
                            if(a!=0)
                            {
                                printf("\nNo.Of active accounts in XYZ bank are %d\n",a);
                            }
                            else
                            {
                                printf("\nNo active accounts are present");
                            }
                        }
                        else if(choice1==2)
                        {
                            printf("\n\t------Display account information by Account TYPE-----\n");
                            printf("\nEnter the type of account to be searched\n");
                            printf("---1.Savings(SB)---\n---2.Current Account(CA)---\n---3.Recurring Deposit(RD)---\n---4.Fixed Deposit(FD)--\n");
                            printf("Your Choice : ");
                            scanf("%d",&c);
                            displaybytype(&ptr,c);
                        }
                        else if(choice1==1)
                        {
                            printf("\n\t------Create an account------\n");
                            append(&ptr,++acno);
                        }
                        else
                        {
                            printf("\nWrong INPUT\n");
                        }
                        printf("!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n");
                        printf("\nDo you want to continue in ADMIN's Module ???\nPress 0 for NO (or) Press any other number for YES\n");
                        scanf("%d",&ex);
                    }while(ex!=0);
                    printf("\n\t\t----------Thank You for your service----------\n");
                }
                else
                {
                    printf("\nWrong Info\n");
                    printf("=======-======");
                }
                break;

        case 2: printf("\n\t!=!=!!=!=!!=!=!!=!=!!=!=!!=!=!\n");
                printf("\n\t   Welcome USER to XYZ Bank\n");
                printf("\n\t!=!=!!=!=!!=!=!!=!=!!=!=!!=!=!\n");
                printf("\nPlease enter your account number: ");
                scanf("%d",&un);
                int result = searchacc(&ptr,un);
                if(result==1)
                {
                    printf("\nPlease enter your account password: ");
                    scanf("%s",up);
                    int ans,v;
                    ans=cmp(&ptr,un,up);
                    if(ans==1)
                    {
                        do
                        {
                            printf("\n\t\tThe following services are available:-\n\n1.Deposit\n2.Widthraw\n3.View all your information\n4.Delete your account\n5.Transfer amount to another account\n\nPress 0 to exit\n\n");
                            printf("Please enter your choice: ");
                            scanf("%d",&uch);
                            switch(uch)
                            {
                                case 1: deposit(&ptr,un);
                                        break;
                                case 2: widthraw(&ptr,un);
                                        break;
                                case 3: v=view(&ptr,un);
                                        if(v==1)
                                        {
                                            printf("\nAccount exists\n");
                                        }
                                        else
                                        {
                                            printf("\nThe Account does not exists\n");
                                        }
                                        break;
                                case 4: delacc(&ptr,un);
                                        break;
                                case 5:trans(&ptr,un);
                                        break;
                                case 0: uch=0;
                                        break;
                            }
                            printf("\n!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n");
                            printf("\n\tWould you like to continue in this module\n");
                            printf("-----Press 0 to SIGNOUT-----\n\t (or)\n-----Press any other number to Continue-----\n");
                            scanf("%d",&uch);
                        }while(uch!=0);
                    }
                    else
                    {
                            printf("\nThe password does not match\n!! Try again !!");
                    }
                }
                else
                {
                    printf("\nNo such account exists\n!! Try again !!");
                }
                break;
        default:printf("\nWrong Input\n!! Try again !!");
                break;
        }
    printf("!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\n");
    printf("\n Do you want to continue processing in XYZ Bank???\nPress 0 for NO (or) Press any other number for YES\n");
    scanf("%d",&ex1);
    }while(ex1!=0);
}
void append(struct user **q,int n)
{
	struct user *temp,*t;
	temp=malloc(sizeof(struct user));
	n=n+1;

	int ubal,tyac;
	temp->accno = n;
	printf("\n           SETUP          \n");

    printf("\nType of ACCOUNT ?\n1.Savings Bank(SB)\n2.Current Account(RCA)\n3.Recurring Deposit\n4.Fixed Deposit\n");
    printf("Your Choice : ");
    scanf("%d",&tyac);
    while(tyac<=0||tyac>4)
    {
        printf("\n\tWrong INPUT Choice\nPlease enter any one of the following : \n");
        printf("\nType of ACCOUNT ?\n1.Savings Bank(SB)\n2.Current Account(RCA)\n3.Recurring Deposit\n4.Fixed Deposit\n");
        printf("Your Choice : ");
        scanf("%d",&tyac);
    }
	printf("\nEnter account holders name : ");
	scanf("%s",temp->name);

	printf("\nCreate a password:  ");
	scanf("%s",temp->pswd);

    switch(tyac)
    {
        case 1: strcpy(temp->btype,"SB");
                printf("\nDeposit amount while creating a new SAVINGS account is Rs 500\nEnter the amount :");
                scanf("%d",&ubal);
                while(ubal<500)
                {
                    printf("\nMinimum Rs 500 DEPOSIT AMOUNT Initially\n Enter Rs500 or more :");
                    scanf("%d",&ubal);
                    temp->bal= ubal;
                }
                printf("\nYour account number is : %d",	temp->accno);
                printf("\n\t=====CONGRATULATIONS=====\n");
                temp->bal= ubal;
                break;
        case 2: strcpy(temp->btype,"RCA");
                printf("\nMinimum Monthly average Balance while creating a new Regular Current Account is Rs 10000\nEnter the amount :");
                scanf("%d",&ubal);
                while(ubal<10000)
                {
                    printf("\nMinimum Monthly average Balance is 10000\n Enter Rs10000 or more :");
                    scanf("%d",&ubal);
                    temp->bal= ubal;
                }
                printf("\nYour account number is : %d",	temp->accno);
                printf("\n\t=====CONGRATULATIONS=====\n");
                temp->bal= ubal;
                break;
        case 3: strcpy(temp->btype,"RD");
                printf("\nMinimum Balance while creating a new Recurring Deposit Account is Rs 100\nEnter the amount :");
                scanf("%d",&ubal);
                while(ubal<100)
                {
                    printf("\nMinimum Balance is 100\n Enter Rs100 or more :");
                    scanf("%d",&ubal);
                    temp->bal= ubal;
                }
                printf("\nYour account number is : %d",	temp->accno);
                printf("\n\t=====CONGRATULATIONS=====\n");
                temp->bal= ubal;
                break;
        case 4: strcpy(temp->btype,"FD");
                printf("\nMinimum Balance while creating a new Fixed Deposit Account is Rs 1000\nEnter the amount :");
                scanf("%d",&ubal);
                while(ubal<1000)
                {
                    printf("\nMinimum Balance is 1000\n Enter Rs1000 or more :");
                    scanf("%d",&ubal);
                    temp->bal= ubal;
                }
                printf("\nYour account number is : %d",	temp->accno);
                printf("\n\t=====CONGRATULATIONS=====\n");
                temp->bal= ubal;
                break;
        default:printf("\nWRONG INPUT\n");
            break;
    }



	temp->linkk = NULL;

	if(*q==NULL)
	{
		*q=temp;
	}
	else
	{
		t=*q;
		while(t->linkk !=NULL)
		{
			t=t->linkk;
		}
		t->linkk = temp;
	}
	printf("\nYour account has been created\n     Name :%s\n     Account No:%d\n     Account-Type:%s\n     Password:%s\n     Balance:%d\n",temp->name,temp->accno,temp->btype,temp->pswd, temp->bal);
}

int display(struct user **l)
{
    int count=0;
    struct user *t;
    t=*l;
    if(t!=NULL)
    {
        while(t!= NULL)
            {
                printf("Account No : %d\n",t->accno);
                printf("Account-Type : %s\n",t->btype);
                printf("Balance : %d\n\n",t->bal);
                t= t->linkk;
                count =count +1;
            }
         return count;
    }
    else
    {

            printf("\nNo accounts yet created\n");
            return 0;
    }
}
void displaybytype(struct user **l,int c)
{
    int count=0;
    struct user *t;
    t=*l;
    if(c==1)
    {
        if(t==NULL)
                {
                    printf("\nNo accounts yet created\n");
                }
        while(t!=NULL)
               {
                    if(strcmp(t->btype,"SB")==0)
                    {
                        printf("Account No : %d\n",t->accno);
                        printf("Account-Type : %s\n",t->btype);
                        printf("Balance : %d\n\n",t->bal);
                        count =count +1;
                    }
                    t= t->linkk;
                }

                printf("No of active accounts of type SAVINGS ACCOUNT are %d",count);
    }
    else if(c==2)
    {
        if(t==NULL)
                {
                    printf("\nNo accounts yet created\n");
                }
        while(t!=NULL)
               {
                    if(strcmp(t->btype,"RCA")==0)
                    {
                        printf("Account No : %d\n",t->accno);
                        printf("Account-Type : %s\n",t->btype);
                        printf("Balance : %d\n\n",t->bal);
                        count =count +1;
                    }
                    t= t->linkk;
                }

                printf("No of active accounts of type CURRENT ACCOUNT are %d",count);
    }
    else if(c==3)
    {
        if(t==NULL)
                {
                    printf("\nNo accounts yet created\n");
                }
        while(t!=NULL)
               {
                    if(strcmp(t->btype,"RD")==0)
                    {
                        printf("Account No : %d\n",t->accno);
                        printf("Account-Type : %s\n",t->btype);
                        printf("Balance : %d\n\n",t->bal);

                        count =count +1;
                    }
                    t= t->linkk;

                }

                printf("No of active accounts of type RECURRING DEPOSIT are %d",count);
    }
    else if(c==4)
    {
        if(t==NULL)
                {
                    printf("\nNo accounts yet created\n");
                }
        while(t!=NULL)
               {
                    if(strcmp(t->btype,"FD")==0)
                    {
                        printf("Account No : %d\n",t->accno);
                        printf("Account-Type : %s\n",t->btype);
                        printf("Balance : %d\n\n",t->bal);
                        count =count +1;
                    }
                    t= t->linkk;

                }

                printf("No of active accounts of type FIXED DEPOSIT are %d",count);
    }
    else
    {
        printf("\n\t-----WRONG INPUT-----\n");
    }
}
void deposit(struct user **q,int ac)
{
    struct user *t;
    t=*q;
	while(t!=NULL)
    {
        if (t->accno == ac)
        {
            int amount;
            printf("\nEnter the amount you want to deposit: ");
            scanf("%d",&amount);
            t->bal=t->bal+amount;
            printf("\t\t\nAccount No : %d\n",t->accno);
            printf("\t\tBalance : %d\n\n",t->bal);
            break;
        }
        t=t->linkk;
    }
    if(t==NULL)
    {
        printf("\nNo Such account exists\n");
    }
}
void widthraw(struct user **q,int ac)
{
    struct user *t;
	t=*q;
    while(t!=NULL)
    {
	    if (t->accno == ac)
        {
            int amount;
            printf("\nEnter the amount you want to widthraw: ");
            scanf("%d",&amount);
            while(amount>t->bal)
            {
                printf("Not enough balance in your account to widthraw money\n\tPlease enter amount less than Rs.%d to withraw : ",t->bal);
                scanf("%d",&amount);
            }
            t->bal=t->bal-amount;
            printf("\t\tAccount No : %d\n",t->accno);
            printf("\t\tBalance : %d\n\n",t->bal);
            break;
        }
        t=t->linkk;
    }
    if(t==NULL)
    {
        printf("\nNo Such account exists\n");
    }
}
int view(struct user **q,int ac)
{
    struct user *t;
    t=*q;
    while(t!=NULL)
    {
        if (t->accno == ac)
        {
            printf("\t\tAccount No : %d\n",t->accno);
            printf("\t\tAccount Holder's Name : %s\n",t->name);
            printf("\t\tBalance : %d\n\n",t->bal);
            return 1;
        }
        t=t->linkk;
    }
    return 0;
}
void delacc(struct user **q,int ac)
{
    struct user *t,*prev;
    prev=NULL;
    if(*q==NULL)
	{
		printf("\nNo records found\n");
	}
	else
	{
        t=*q;
	    while(t->accno !=ac && t!=NULL)
	    {
	        prev=t;
	    	t=t->linkk;
	    }
	    if(t==*q)
	    {
	        *q=t->linkk;
	        free(t);
	    }
	    else if(t->linkk==NULL)
	    {
	        prev->linkk=NULL;
	    }
	    else
	    {
	     prev->linkk=t->linkk;

	     free(t);
	    }
	}
}
int cmp(struct user **q,int ac,char ps[20])
{
    struct user *t;
    t=*q;

    while(t!=NULL)
    {
        if (t->accno == ac && (strcmp(ps,t->pswd)==0))
        {
            return 1;
        }
        t=t->linkk;
    }
    return 0;
}
int searchacc(struct user **q,int ac)
{
    struct user *t;
    t=*q;
    while(t!=NULL)
    {
        if (t->accno == ac)
        {
            printf("\t\t\n------WELCOME %s to XYZ Bank------\n",t->name);
            printf("\tAccount No : %d\n",t->accno);
            return 1;
        }
        t=t->linkk;
    }
    return 0;
}
void trans(struct user **q,int ac)
{
    struct user *t,*t1;
    t=*q;
    int ac1,amount;

    printf("\nEnter the account number u want to transfer : ");
    scanf("%d",&ac1);
    while(ac1==ac)
    {
        printf("\n\nTransfer of money cannot be done to the same account");
        printf("\nPlease enter a different account number: ");
        scanf("%d",&ac1);
    }
    t=*q;
    t1=*q;
    while(t!=NULL)
    {
        if (t->accno == ac1)
        {
            printf("\nAccount name : %s",t->name);
            printf("\tAccount No : %d\n",t->accno);
            while(t1!=NULL)
            {
                if(t1->accno == ac)
                {
                    printf("\n\tYour Balance is : %d",t1->bal);
                    printf("\nEnter the amount you want transfer: ");
                    scanf("%d",&amount);
                    while(amount>=t1->bal)
                    {
                        printf("Not enough balance in your account to transfer money\n\tPlease enter amount less than Rs.%d to transfer : ",t1->bal);
                        scanf("%d",&amount);
                    }
                    t1->bal=t1->bal-amount;
                    t->bal=t->bal+amount;
                    printf("\t\tAccount No : %d\n",t1->accno);
                    printf("\t\tYour current is Balance : %d\n\n",t1->bal);
                    break;
                }
                t1=t1->linkk;
            }
            if(t1==NULL)
            {
                printf("\nNo Such account exists\n");
            }

            break;
        }
        t=t->linkk;
    }
    if(t==NULL)
    {
            printf("\nNo Such account exists\n");
    }
}
