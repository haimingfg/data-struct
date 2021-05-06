# 特性
栈stack限制插入和删除只能在一个位置进行，在末端叫做栈顶（top）
基本操作：Push 进栈 和 pop 出栈
数据流动：LIFO 先进先出，表示元素的添加和删除同一个出入口



# ADT（抽闲数据描述）
```
Stack 栈结构
    int Capacity;
    int TopOfStack;
    ElementType *Array

方法

int IfEmpty(Stack S)
int IfFull(Stack S)
Stack CreateStack(int MaxELements)
void DisposeStack(Stack S)
void Push(ElementType x, Stack S)
ElementType Top(Stack S)
void Pop(Stack S)
ElementType TopAndPop(Stack S)
```

# 存储结构

# 应用
数制转换

括号匹配检验

迷宫求解

(参考资料)[https://blog.csdn.net/gavin_john/article/details/71374487]


# 其他参考资料

(参考资料) http://data.biancheng.net/view/169.html